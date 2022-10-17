<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$x = $_REQUEST ['x']; // kwota
$y = $_REQUEST ['y']; //lata
$r = $_REQUEST ['r']; // oprocentowanie

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y) && isset($r))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano ilości lat';
}
if ( $r == "") {
	$messages [] = 'Nie podano oprocentowania';
}


// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
	$r = intval($r);

	
	//$result =($x + (($x * ($r/100)) * $y)) / (12 * $y);
	if ($r ==0){
		$result = $x / (12 * $y);
	}
	if($r<0){
		$messages [] = 'Oprocentowanie nie może być ujemne';
	}
	else{
	$result = ($x * (($r/100)/12) * ((1+(($r/100)/12))**($y*12)))/((((1+($r/12/100))**($y*12)))-1);
	}
	//(kwota * ((opro/100)+1))/12
	//R = (50000 x (8% / 12) x (1 + (7,20% / 12)) ^ lata*12) / (((1 + (7,20% / 12)) ^ lata*12) – 1)
	//wykonanie operacji
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';
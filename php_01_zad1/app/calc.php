<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x']; // kwota
$y = $_REQUEST ['y']; //lata
$r = $_REQUEST ['r']; // oprocentowanie

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

	if ($r ==0){
		$result = $x / (12 * $y);
	}
	if($r<0){
		$messages [] = 'Oprocentowanie nie może być ujemne';
	}
	else{
	$result = ($x * (($r/100)/12) * ((1+(($r/100)/12))**($y*12)))/((((1+($r/12/100))**($y*12)))-1);
	}

}

include 'calc_view.php';
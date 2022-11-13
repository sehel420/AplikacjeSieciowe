{extends file=$conf->root_path|cat:"/templates/main.html"}
{block name=footer}Autor
Dawid Stryczek{/block}


{block name=content}


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">

<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
	<fieldset>
		<label for="x">Kwota:</label>
		<input id="x" type="text" placeholder="Kwota Kredytu" name="x" value="{$form->x}">
		<label for="r">Oprocentowanie:</label>
		<input id="r" type="text" placeholder="Oprocentowanie" name="r" value="{$form->r}">
		<label for="y">Lata:</label>
		<input id="y" type="text" placeholder="Ilość Lat" name="y" value="{$form->y}">
	
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</fieldset>
</form>
</div>
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>
</div>


{/block}
<?php
/* Smarty version 3.1.30, created on 2022-11-18 17:23:20
  from "C:\xampp\htdocs\php_zad7_a\app\views\calc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6377b1783daf43_91804147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b446ebd3f6abff140077361775adcb11cc6b443c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_zad7_a\\app\\views\\calc.tpl',
      1 => 1668788596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6377b1783daf43_91804147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6445132266377b1783dab57_59172498', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_6445132266377b1783dab57_59172498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator Kredytowy</legend>
	<fieldset>
        <div class="pure-control-group">
		<label for="x">Kwota:</label>
		<input id="id_x" type="text" placeholder="Kwota Kredytu" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
		<label for="id_r">Oprocentowanie:</label>
		<input id="r" type="text" placeholder="Oprocentowanie" name="r" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->r;?>
">
		<label for="y">Lata:</label>
		<input id="id_y" type="text" placeholder="Ilość Lat" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
	
		</div>
		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}

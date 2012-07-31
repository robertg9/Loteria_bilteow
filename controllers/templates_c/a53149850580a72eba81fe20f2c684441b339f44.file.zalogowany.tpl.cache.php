<?php /* Smarty version Smarty-3.1.11, created on 2012-07-31 12:50:59
         compiled from "..\views\Organizator\zalogowany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185975017b89321f3a0-26214607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a53149850580a72eba81fe20f2c684441b339f44' => 
    array (
      0 => '..\\views\\Organizator\\zalogowany.tpl',
      1 => 1343731154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185975017b89321f3a0-26214607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uzytkownik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5017b8932e9b17_72787155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5017b8932e9b17_72787155')) {function content_5017b8932e9b17_72787155($_smarty_tpl) {?>
<br>Zalogowany jako : <?php echo $_smarty_tpl->tpl_vars['uzytkownik']->value;?>
 <br>
<a href="dodajImpreze">Dodaj Ofertê Imrpezy</a> <br>
<a href="index.php">Home</a> 
<?php }} ?>
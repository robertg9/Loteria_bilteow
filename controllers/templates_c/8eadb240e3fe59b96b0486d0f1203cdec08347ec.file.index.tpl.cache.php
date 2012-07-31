<?php /* Smarty version Smarty-3.1.11, created on 2012-07-31 13:44:20
         compiled from "..\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268615017a5a61617f8-07987393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eadb240e3fe59b96b0486d0f1203cdec08347ec' => 
    array (
      0 => '..\\views\\index.tpl',
      1 => 1343735041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268615017a5a61617f8-07987393',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5017a5a6249172_42530605',
  'variables' => 
  array (
    'uzytkownik' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5017a5a6249172_42530605')) {function content_5017a5a6249172_42530605($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['uzytkownik']->value)){?>
zalogowany jako : <?php echo $_smarty_tpl->tpl_vars['uzytkownik']->value;?>

<?php }?>

<br> 
<a href="zarejestruj">Rejestracja</a><br>
<a href="logowanie">Zaloguj</a><br>
<a href="controllers/testy.php">Tedty</a>
<?php }} ?>
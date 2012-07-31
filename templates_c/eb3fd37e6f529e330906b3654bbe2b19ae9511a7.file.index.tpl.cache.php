<?php /* Smarty version Smarty-3.1.11, created on 2012-07-31 14:08:32
         compiled from "views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24079501687dfa094c1-88590547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3fd37e6f529e330906b3654bbe2b19ae9511a7' => 
    array (
      0 => 'views\\index.tpl',
      1 => 1343736511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24079501687dfa094c1-88590547',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501687dfb3a215_55254870',
  'variables' => 
  array (
    'tmp' => 0,
    'uzytkownik' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501687dfb3a215_55254870')) {function content_501687dfb3a215_55254870($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['tmp']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['uzytkownik']->value)){?>
zalogowany jako : <?php echo $_smarty_tpl->tpl_vars['uzytkownik']->value;?>

<?php }?>

<br> 
<a href="zarejestruj">Rejestracja</a><br>
<a href="logowanie">Zaloguj</a><br>
<a href="controllers/testy.php">Tedty</a>
<?php }} ?>
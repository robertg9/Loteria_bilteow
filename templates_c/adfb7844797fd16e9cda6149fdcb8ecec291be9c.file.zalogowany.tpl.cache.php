<?php /* Smarty version Smarty-3.1.11, created on 2012-07-31 14:52:03
         compiled from "views\Organizator\zalogowany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138395017b580970552-01537133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adfb7844797fd16e9cda6149fdcb8ecec291be9c' => 
    array (
      0 => 'views\\Organizator\\zalogowany.tpl',
      1 => 1343739112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138395017b580970552-01537133',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5017b580a14832_79544647',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5017b580a14832_79544647')) {function content_5017b580a14832_79544647($_smarty_tpl) {?>
<br>Zalogowany jako : <?php echo $_SESSION['pseudonim'];?>
 <br>
<a href="dodajImpreze">Dodaj Ofertê Imrpezy</a> <br>
<a href="index.php">Home</a> 
<?php }} ?>
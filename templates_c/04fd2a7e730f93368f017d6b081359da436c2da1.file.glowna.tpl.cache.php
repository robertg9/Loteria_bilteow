<?php /* Smarty version Smarty-3.1.11, created on 2012-07-31 16:29:57
         compiled from "views\glowna.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124245017bc3086e1e3-12367234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04fd2a7e730f93368f017d6b081359da436c2da1' => 
    array (
      0 => 'views\\glowna.tpl',
      1 => 1343744996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124245017bc3086e1e3-12367234',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5017bc30944308_20003575',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5017bc30944308_20003575')) {function content_5017bc30944308_20003575($_smarty_tpl) {?>
<?php if (isset($_SESSION['pseudonim'])){?>
Zalogowany jako : <?php echo $_SESSION['pseudonim'];?>

<?php }?> 

<br>
<a href="zarejestruj">Rejestracja</a><br>
<a href="logowanie">Zaloguj</a><br>
<a href="controllers/testy.php">Tedty</a>

<?php }} ?>
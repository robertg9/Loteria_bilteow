<?php /* Smarty version Smarty-3.1.11, created on 2012-08-02 09:14:11
         compiled from "views\glowna.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124245017bc3086e1e3-12367234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04fd2a7e730f93368f017d6b081359da436c2da1' => 
    array (
      0 => 'views\\glowna.tpl',
      1 => 1343891651,
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
  'variables' => 
  array (
    'imprezy' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5017bc30944308_20003575')) {function content_5017bc30944308_20003575($_smarty_tpl) {?>
<?php if (isset($_SESSION['pseudonim'])){?>
Zalogowany jako : <?php echo $_SESSION['pseudonim'];?>

<?php }?> 
<table border="1">
<thead>
<tr>
<th>Dodane przez</th>
<th>Nazwa Imprezy</th>
<th>Opis</th>
</tr>>
</thead>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imprezy']->value->fetchAll(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
 <tr>
 <td><?php echo $_smarty_tpl->tpl_vars['row']->value['FK_id_Organizator'];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['row']->value['Nazwa'];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['row']->value['Opis'];?>
</td>
 </tr>
 </p>
<?php } ?>
</table>
<br>
<a href="zarejestruj">Rejestracja</a><br>
<a href="logowanie">Zaloguj</a><br>
<a href="controllers/testy.php">Tedty</a>
<?php }} ?>
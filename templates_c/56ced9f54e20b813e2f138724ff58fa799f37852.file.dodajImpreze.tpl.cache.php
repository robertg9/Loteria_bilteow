<?php /* Smarty version Smarty-3.1.11, created on 2012-08-01 11:36:54
         compiled from "views\Imprezy\dodajImpreze.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229925017e6bc563038-08265132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ced9f54e20b813e2f138724ff58fa799f37852' => 
    array (
      0 => 'views\\Imprezy\\dodajImpreze.tpl',
      1 => 1343813800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229925017e6bc563038-08265132',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5017e6bc66b6c9_96462848',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5017e6bc66b6c9_96462848')) {function content_5017e6bc66b6c9_96462848($_smarty_tpl) {?>


<?php if (isset($_SESSION['pseudonim'])){?>
<form action="impreza_dodana.php" method=post>
	<table border=0 align="center">
		<tr>
			<td bgcolor=#CCFFFF>Nazwa:</td>
			<td bgcolor=#99CCFF><input type="text" name="Nazwa" size="20"
				maxlength="15"></td>
		</tr>
		<tr>
			<td bgcolor=#CCFFFF>Opis:</td>
			<td bgcolor=#99CCFF><textarea name="Opis" rows="8" cols="50"></textarea>
			</td>
		</tr>
		<tr>
			<td bgcolor=#CCFFFF>Miasto:</td>
			<td bgcolor=#99CCFF><input type="text" name="Miasto" size="20"
				maxlength="15"></td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Ulica:</td>
			<td bgcolor=#99CCFF><input type="text" name="Ulica" size="20"
				maxlength="15"></td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Numer:</td>
			<td bgcolor=#99CCFF><input type="text" name="Numer" size="20"
				maxlength="15"></td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Data rozpoczêcia:</td>
			<td colspan="2" bgcolor=#99CCFF>Dzieñ:<input type="text" name="dzien"
				size="3" maxlength="2">Miesi¹c:<input type="text" name="miesiac"
				size="2" maxlength="2">Rok:<input type="text" name="rok" size="4"
				maxlength="4">
			</td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Data zakoñczenia:</td>
			<td colspan="2" bgcolor=#99CCFF>Dzieñ:<input type="text"
				name="dzienZ" size="3" maxlength="2">Miesi¹c:<input type="text"
				name="miesiacZ" size="2" maxlength="2">Rok:<input type="text"
				name="rokZ" size="4" maxlength="4">
			</td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Data zakoñczenia rekrutacji:</td>
			<td colspan="2" bgcolor=#99CCFF>Dzieñ:<input type="text"
				name="dzienR" size="3" maxlength="2">Miesi¹c:<input type="text"
				name="miesiacR" size="2" maxlength="2">Rok:<input type="text"
				name="rokR" size="4" maxlength="4">
			</td>
		</tr>

		<td colspan="2" align="center"><input type="submit" name="potrawa"
			value="Dodaj">
		</td>
	</table>
</form>
<?php }else{ ?>
<p>Musisz siê zalogowaæ aby móc dodawaæ imprezy</p>
<a href="index.php">Glowna</a><br>
<?php }?> <?php }} ?>
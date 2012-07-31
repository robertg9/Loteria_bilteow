<?php
session_start();
if(!isset($_SESSION['pseudonim'])) {
	echo "Musisz sie zalogowaæ aby móc dodawaæ imprezy<br>";
}

else {
	echo "Jesteœ zalogowany";
	echo "Zalogowany jako :".$_SESSION['pseudonim'];
}
?>

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

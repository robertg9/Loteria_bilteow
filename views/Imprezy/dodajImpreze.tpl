


{if isset($smarty.session.pseudonim)}
<form action="imprezaDodana" method=post>
	<table border=0 align="center">
		<tr>
			<td bgcolor=#CCFFFF>Nazwa:</td>
			<td bgcolor=#99CCFF><input type="text" name="nazwa" size="20"
				maxlength="15"></td>
		</tr>
		<tr>
			<td bgcolor=#CCFFFF>Opis:</td>
			<td bgcolor=#99CCFF><textarea name="opis" rows="8" cols="50"></textarea>
			</td>
		</tr>
		<tr>
			<td bgcolor=#CCFFFF>Miasto:</td>
			<td bgcolor=#99CCFF><input type="text" name="miasto" size="20"
				maxlength="15"></td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Ulica:</td>
			<td bgcolor=#99CCFF><input type="text" name="ulica" size="20"
				maxlength="15"></td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Numer:</td>
			<td bgcolor=#99CCFF><input type="text" name="numer" size="20"
				maxlength="15"></td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Data rozpocz�cia:</td>
			<td colspan="2" bgcolor=#99CCFF>Dzie�:<input type="text" name="dzien"
				size="3" maxlength="2">Miesi�c:<input type="text" name="miesiac"
				size="2" maxlength="2">Rok:<input type="text" name="rok" size="4"
				maxlength="4">
			</td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Data zako�czenia:</td>
			<td colspan="2" bgcolor=#99CCFF>Dzie�:<input type="text"
				name="dzienZ" size="3" maxlength="2">Miesi�c:<input type="text"
				name="miesiacZ" size="2" maxlength="2">Rok:<input type="text"
				name="rokZ" size="4" maxlength="4">
			</td>
		</tr>

		<tr>
			<td bgcolor=#CCFFFF>Data zako�czenia rekrutacji:</td>
			<td colspan="2" bgcolor=#99CCFF>Dzie�:<input type="text"
				name="dzienR" size="3" maxlength="2">Miesi�c:<input type="text"
				name="miesiacR" size="2" maxlength="2">Rok:<input type="text"
				name="rokR" size="4" maxlength="4">
			</td>
		</tr>

		<td colspan="2" align="center"><input type="submit" name="potrawa"
			value="Dodaj">
		</td>
	</table>
</form>
{else}
<p>Musisz si� zalogowa� aby m�c dodawa� imprezy</p>
<a href="index.php">Glowna</a><br>
{/if} 
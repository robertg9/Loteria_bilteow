
{if isset($uzytkownik)}

zalogowany jako : {$smarty.session."pseudonim"}
{$smarty.session.id} == $_SESSION['pseudonim'];
{/if}

<br> 
<a href="zarejestruj">Rejestracja</a><br>
<a href="logowanie">Zaloguj</a><br>
<a href="controllers/testy.php">Tedty</a>

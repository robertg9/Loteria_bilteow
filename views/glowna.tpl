
{if isset($smarty.session.pseudonim)}
Zalogowany jako : {$smarty.session.pseudonim}
{/if} 
<table border="1">
<thead>
<tr>
<th>Dodane przez</th>
<th>Nazwa Imprezy</th>
<th>Opis</th>
</tr>>
</thead>
{foreach from=$imprezy->fetchAll() item=row}
 <tr>
 <td>{$row['FK_id_Organizator']}</td>
 <td>{$row['Nazwa']}</td>
 <td>{$row['Opis']}</td>
 </tr>
 </p>
{/foreach}
</table>
<br>
<a href="zarejestruj">Rejestracja</a><br>
<a href="logowanie">Zaloguj</a><br>

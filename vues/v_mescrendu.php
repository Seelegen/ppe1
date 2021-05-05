<h3>Mes comptes rendu</h3>
<form method='POST' action='index.php?uc=ajoutcrendu'>
<table class='tabNonQuadrille'>
<tr>
	<td>Date du compte rendu (jj/mois/aaaa)</td>
	<td>
		<input  type='text' name=dateCr  size='30' maxlength='45'>
	</td>
</tr>
<tr>
	<td>Titre</td>
	<td>
		<input  type='text' name=titreCr size='30' maxlength='45'>
	</td>
</tr>
<tr>
	<td>Description du compte rendu</td>
	<td>
		<textarea  type='text' name=descriptionCr  size='255' maxlength='100'>
        </textarea>
	</td>
</tr>

<tr>
</tr>

</table>
<input type='submit' value='Valider' name='valider'>
         <input type='reset' value='Annuler' name='annuler'>

</form>

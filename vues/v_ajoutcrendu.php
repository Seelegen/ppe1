<form>
<? php include("controleurs/c_ajoutcrendu.php")?>
      <h2>Ajout de compte rendu</h2>
         
      <form method='GET'>
      <div class="corpsForm">      
          
      <table>
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
                    <textarea name=descriptionCr size='255'>
                    </textarea>
                </td>
            </tr>

      </table>
</div>           
          
  
      <div class="piedForm">
      <p>
        <input id="okCR" name="okCR" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p>
      </div>
        
      </form>
  
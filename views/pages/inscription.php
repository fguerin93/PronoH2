<?php

include '../views/partials/header.php';

?>

<div align="center">
   <h2>Inscription</h2>
   <br /><br />
   <form method="POST" action="">
      <table>
         <tr>
            <td align="right">
               <label for="pseudo">Pseudo :</label>
            </td>
            <td>
               <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
            </td>
         </tr>
         <tr>
            <td align="right">
               <label for="mail">Mail :</label>
            </td>
            <td>
               <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
            </td>
         </tr>
         <tr>
            <td align="right">
               <label for="mdp">Mot de passe :</label>
            </td>
            <td>
               <input type="password" placeholder="Votre mot de passe" id="password" name="password" />
            </td>
         </tr>
         <tr>
            <td align="right">
               <label for="mdp2">Confirmation du mot de passe :</label>
            </td>
            <td>
               <input type="password" placeholder="Confirmez votre mdp" id="password2" name="password2" />
            </td>
         </tr>
         <tr>
            <td></td>
            <td align="center">
               <br />
               <input type="submit" name="forminscription" value="Je m'inscris" />
            </td>
         </tr>
      </table>
   </form>
   <?php
   if(isset($erreur)) {
      echo '<font color="red">'.$erreur."</font>";
   }
   ?>
</div>


<?php

include '../views/partials/footer.php';

?>
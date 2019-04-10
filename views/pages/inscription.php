<?php

include '../views/partials/header.php';

?>
<div class="inscription-container">
  <div class="inscription-form">
    <h2>Inscris-toi</h2>
    <p>Rejoins-nous et viens parier ! </p>
    <br /><br />
    <form method="POST" action="">
      <table>
        <tr>
          <td>
            <label for="pseudo">Pseudo :</label>
          </td>
          <td>
            <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="mail">Mail :</label>
          </td>
          <td>
            <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="mdp">Mot de passe :</label>
          </td>
          <td>
            <input type="password" placeholder="Votre mot de passe" id="password" name="password" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="mdp2">Confirmation du mot de passe :</label>
          </td>
          <td>
            <input type="password" placeholder="Confirmez votre mdp" id="password2" name="password2" />
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <br />
            <input type="submit" name="forminscription" value="Je m'inscris" class="inscription-button" />
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
  <div class="inscription-illustration">
    <img src="<?=URL?>assets/images/img-3.svg" alt="foot">
  </div>
</div>



<?php

include '../views/partials/footer.php';

?>
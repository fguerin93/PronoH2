<?php

include '../views/partials/header.php';

?>

<div align="center">
    <h2>Connexion</h2>
    <br /><br />
    <form method="POST" action="">
    <input type="text" name="pseudoconnect" placeholder="pseudo" />
    <input type="password" name="passwordconnect" placeholder="Mot de passe" />
    <br /><br />
    <input type="submit" name="formconnexion" value="Se connecter !" />
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
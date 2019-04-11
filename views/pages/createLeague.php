<?php include '../views/partials/header.php'; ?>

<div class="background-div">
    <div class="new-league-container">
        <div class="content">
            <h1>Nouvelle ligue</h1>
            <p>C'est le moment de créer ta ligue !</p>
            <form action="" method="POST">
                <div>
                    <label for="name">Nom de la ligue</label><br>
                    <input type="text" name="name" placeholder="Hetic pronos">
                </div>
                <div>
                    <label for="name">Code de l'invitation</label><br>
                    <input type="text" name="code" placeholder="2UB763">
                </div>
                <div>
                    <label for="name">Message d'introduction de la ligue</label><br>
                     <textarea name="text" id="" cols="30" rows="10" placeholder="Votre message..."></textarea>
                 </div>
                <p>Maintenant invite tes amis !</p>
                <button type="submit" name="formcreationleague">Choisis tes matchs</button>
            </form>
        </div>
        <div class="illustration">
            <img src="<?=URL?>assets/images/img-2.svg" alt="foot">
        </div>
    </div>
</div>

<?php include '../views/partials/footer.php' ?>
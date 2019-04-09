<?php
include '../views/partials/header.php' 
?>
    <div class="new-league-container">
            <div class="content">
                <h1>Nouvelle ligue</h1>
                <p>C'est le moment de créer ta ligue</p>
                <form action="" method="post">
                    <div>
                        <label for="name">Nom de la ligue</label><br>
                        <input type="text" placeholder="Hetic pronos">
                    </div>
                    <div>
                        <label for="name">Code de l'invitation</label><br>
                        <input type="text" placeholder="2UB763">
                    </div>
                    <div>
                        <label for="name">Message d'introduction de la ligue</label><br>
                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit">Créer ma ligue</button>
                </form>
            </div>
            <div class="illustration">
                <img src="images/img-2.svg" alt="foot">
            </div>
    </div>

<?php include '../views/partials/footer.php' ?>
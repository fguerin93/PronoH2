<?php include '../views/partials/header.php' ?>

    <div class="home-container-connected">
        <div class="content">
            <h1>Pronos entre amis</h1>
            <div class="column">
                <div class="home-container-connected-illustration">
                    <p>Tu peux créer ta propre ligue ou rejoindre la ligue de tes amis/collègues</p>
                    <img src="<?=URL?>assets/images/img-1.svg" alt="foot">
                </div>
                <div class="league-container">
                    <div class="league">
                        <h2 class="league-name">Créer une ligue</h2>
                        <a class="stateButton">Créer</a>
                    </div>
                    <div class="league">
                        <form action="" methode="POST">
                            <h2>Rejoindre une ligue</h2><br>
                            <input type="text" name="code" placeholder="Rentre le code">
                            <button type="submit" name="formcreationleague">OK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../views/partials/footer.php' ?>
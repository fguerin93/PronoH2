<?php include '../views/partials/header.php' ?>

    <div class="home-container-connected">
        <div class="content">
            <h1>Pronos entre amis</h1>
            <p>Tu peux créer ta propre ligue ou rejoindre la ligue de tes amis/collègues</p>
            <div class="league-container">
                <div class="league">
                    <h2 class="league-name">Créer une ligue</h2>
                    <button class="stateButton "type="button" name="button">Créer</button>
                </div>
                <div class="league">
                    <form action="" methode="POST">
                        <label for="name">Rejoindre une ligue</label><br>
                        <input type="text" name="code" placeholder="Rentre le code">
                    </form>
                    <button type="submit" name="formcreationleague">OK</button>
                </div>
            </div>
        </div>
    </div>

<?php include '../views/partials/footer.php' ?>
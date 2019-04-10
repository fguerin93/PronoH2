<?php include '../views/partials/header.php' ?>

    <div class="home-container-connected">
        <div class="content">
            <h1>Pronos entre amis</h1>
            <p>Tu peux créer ta propre ligue ou rejoindre la ligue de tes amis/collègues</p>
            <div class="league-container">
                <?php foreach ($leagues as $league) { ?>
                    <div class="league">
                        <h2 class="league-name"><?= $league->name ?></h2>
                        <button class="stateButton "type="button" name="button">En cours</button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?php include '../views/partials/footer.php' ?>
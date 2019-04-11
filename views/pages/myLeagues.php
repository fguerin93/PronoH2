<?php include '../views/partials/header.php'; ?>


<div class="myleague-principal">
    <div class="myleague-content">
        <h1>Mes ligues</h1>
        <p>Retrouve l’ensemble de tes ligues ici. Montre à tes amis/collègues qui est le roi des pronos !</p>
    </div>
    <div class="myleague-globalSquares">
        <div class="myleague-leaguesSquares1">
            <?php for ($i = 0; $i < sizeof($leagues); $i = $i + 2) { ?>
                <a href="<?= URL ?>pronos/<?= $leagues[$i]->id ?>">
                    <div class="myleague-square1">
                        <div class="myleague-square1Logo">
                            <h2><?= $leagues[$i]->name ?></h2>
                        </div>
                        <button class="myleague-stateButton" type="button" name="button">En cours</button>
                    </div>
                </a>
            <?php } ?> 
        </div>
        <div class="myleague-leaguesSquares2">
            <?php for ($i = 1; $i < sizeof($leagues); $i = $i + 2) { ?>
                <a href="<?= URL ?>pronos/<?= $leagues[$i]->id ?>">
                    <div class="myleague-square2">
                        <div class="myleague-square2Logo">
                            <h2><?= $leagues[$i]->name ?></h2>
                        </div>
                        <button class="myleague-stateButton "type="button" name="button">En cours</button>
                    </div>
                </a>
            <?php } ?> 
        </div>
    </div>
</div>


<?php include '../views/partials/footer.php'; ?>
<?php
include '../views/partials/header.php';
?>
<div class="background-div">
    <div class="container-matchs">
        <h1>Choisis tes matchs</h1>
        <form class="selected-match" method="POST">
            <label for="choose-match">Trié par compétition</label>
            <select name="comp" onchange="this.form.submit();">
                <option value="">Compétitions</option>
                <option value="FL1">Ligue 1</option>
                <option value="PL">Premier league</option>
                <option value="BL1">Bundesliga</option>
                <option value="SA">Série A italienne</option>
                <option value="PD">liga espanol</option>
            </select>
        </form>

        <div class="content-matchs">
            <h2>Clique sur le match pour le sélectionner</h2>

            <div class="match-to-select-all-columns">

                <div class="match-to-select-left-column">
                    <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div class="match-to-select" data-id="<?= $matches->matches[$i]->id ?>">
                        <p><?= $matches->matches[$i]->homeTeam->name ?></p>
                        <p class="match-to-select-vs">VS</p>
                        <p><?= $matches->matches[$i]->awayTeam->name ?></p>
                        <p><?= $matches->matches[$i]->utcDate ?></p>
                    </div>
                    <?php } ?>
                </div>

                <div class="match-to-select-right-column">
                    <?php for ($i = 10; $i < 20; $i++) { ?>
                    <div class="match-to-select right" data-id="<?= $matches->matches[$i]->id ?>">
                        <p><?= $matches->matches[$i]->homeTeam->name ?></p>
                        <p class="match-to-select-vs">VS</p>
                        <p><?= $matches->matches[$i]->awayTeam->name ?></p>
                        <p><?= $matches->matches[$i]->utcDate ?></p>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <form action="" method="POST">
            <input class="input-match-selected" name="idString" type="hidden" value="">
            <div class="container-button-matchs">
                <button type="submit" name="formaddmatch" class="button-matchs">Crée ta ligue</button>
            </div>
        </form>

    </div>
</div>

<?php
include '../views/partials/footer.php';
?>

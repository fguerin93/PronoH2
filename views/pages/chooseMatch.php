<?php 
include '../views/partials/header.php';
?>

<h1>Choisis tes matchs</h1>
<form class="selected-match" method="POST">
    <label for="choose-match">Choisi tes matchs:</label>

    <select name="comp" onchange="this.form.submit();">
        <option value="">--Trie tes ligues--</option>
        <option value="FL1">Ligue 1</option>
        <option value="PL">Premier league</option>
        <option value="BL1">Bundesliga</option>
        <option value="SA">Série A italienne</option>
        <option value="PD">liga espanol</option>
    </select>
</form>

<h2>Clique sur le match pour le sélectionner</h2>

<?php for ($i = 0; $i < 20; $i++) { ?>  
    <div class="match-to-select" data-id="<?= $matches->matches[$i]->id ?>">
        <p><?= $matches->matches[$i]->homeTeam->name ?></p>
        <p>VS</p>
        <p><?= $matches->matches[$i]->awayTeam->name ?></p>
        <p><?= $matches->matches[$i]->utcDate ?></p>
    </div>
<?php } ?>
<form action="" method="POST">
    <input class="input-match-selected" name="idString" type="hidden" value="">
    <button type="submit" name="formaddmatch">Créée ta ligue</button>
</form>

<?php 
include '../views/partials/footer.php';
?>
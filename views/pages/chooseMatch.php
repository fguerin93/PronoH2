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
    <div>
        <p><?= $matches->matches[$i]->homeTeam->name ?></p>
        <p>VS</p>
        <p><?= $matches->matches[$i]->awayTeam->name ?></p>
        <p><?= $matches->matches[$i]->utcDate ?></p>
    </div>
<?php } ?>

<?php 
include '../views/partials/footer.php';
?>
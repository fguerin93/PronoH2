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

<?php 
include '../views/partials/footer.php';
?>
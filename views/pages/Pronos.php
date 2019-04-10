<?php include '../views/partials/header.php'; ?>

<div class="myPronos-principal">

  <div class="myPronos-content">
    <h1>Mes pronos</h1>
    <div class="myPronos-ranking">
      <img src="" alt="">
      <p>tu es actuellement 1er/6 de ta ligue BRAVO !</p>
    </div>
    <div class="myPronos-code">
      <p>code d'invitation:</p>
      <p>XXXXXXX</p>
    </div>
  </div>


  <div class="myPronos-globalSqares">

    <!-- premier rectangle de score -->

    <div class="myPronos-sqare">
      <div class="myPronos-leagueLogo">
        <img src="images/PL.png" alt="Première league logo">
      </div>
      <div class="myPronos-date">
        <p>16/05 - 20H00</p>
      </div>

      <div class="myPronos-globalscore">
        <div class="myPronos-pronoInfos">
          <div class="myPronos-pronoLabel">
            <label for="prono">Mon prono</label>
            <div class="myPronos-inputScore">
              <input type="number" id="scoreProno" name="prono" min="0" max="10">
              <p>-</p>
              <input type="number" id="scoreProno" name="prono" min="0" max="10">
            </div>
          </div>
        </div>

        <div class="myPronos-realInfos">
          <div class="myPronos-scoreText">
            <p>Score</p>
            <p>gngngnfgng</p>
          </div>
        </div>
      </div>
      <div class="myPronos-team">
        <div class="myPronos-team1">
          <img src="images/PSG.png" alt="logo psg">
          <p>team name</p>
        </div>
        <div class="myPronos-vs">
          <p>vs</p>
        </div>
        <div class="myPronos-team2">
          <img src="images/PSG.png" alt="logo psg">
          <p>team name</p>
        </div>
      </div>
    </div>

    <!-- fin premier rectangle -->
  </div>
</div>
<?php include 'footer.php'; ?>

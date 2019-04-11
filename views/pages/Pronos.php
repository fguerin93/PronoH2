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
            <p><?= $code[0]->code ?></p>
        </div>
    </div>


    <div class="myPronos-globalSqares">

        <!-- premier rectangle de score -->

        <form action="" method="POST">
            <?php foreach ($matches as $i => $match) { ?>    
                <div class="myPronos-sqare">
                    <div class="myPronos-date">
                        <p><?= $matches[$i]->date ?></p>
                    </div>

                    <div class="myPronos-globalscore">
                        <div class="myPronos-pronoInfos">
                            <div class="myPronos-pronoLabel">
                                <label for="prono">Mon prono</label>
                                <div class="myPronos-inputScore">
                                    <input type="number" id="scoreProno" name="home_goals[]" min="0" max="10">
                                    <p>-</p>
                                    <input type="number" id="scoreProno" name="away_goals[]" min="0" max="10">
                                </div>
                            </div>
                        </div>

                        <div class="myPronos-realInfos">
                            <div class="myPronos-scoreText">
                                <p>Score</p>
                                <p>0 - 0</p>
                            </div>
                        </div>
                    
                    </div>
                    <div class="myPronos-team">
                          <div class="myPronos-team1">
                              <p><?= $matches[$i]->home_team ?></p>
                          </div>
                          <div class="myPronos-vs">
                              <p>vs</p>
                          </div>
                          <div class="myPronos-team2">
                              <p><?= $matches[$i]->away_team ?></p>
                          </div>
                    </div>
                </div>
            <?php } ?>
            <input type="submit" name="formbets" value="Valider" class="bets-button" />
        </form>

        <!-- fin premier rectangle -->
    </div>
</div>

<?php include '../views/partials/footer.php' ?>

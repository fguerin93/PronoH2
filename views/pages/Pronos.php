<?php include '../views/partials/header.php'; ?>

<div class="myPronos-principal">

    <div class="myPronos-content">
        <h1>Mes pronos</h1>
        <div class="myPronos-ranking">
            <img src="" alt="">
            <p>Tu es actuellement <span>1er/ <?= getNumberInLeague($idLeague) ?></span>de ta ligue BRAVO !</p>
        </div>
        <div class="myPronos-code">
            <p>Code d'invitation:</p>
            <p class="code-name"><?= $code[0]->code ?></p>
        </div>
    </div>


    <div class="myPronos-globalSqares">

        <!-- premier rectangle de score -->

        <form action="" method="POST">
            <?php foreach ($matches as $i => $match) { ?>    
                <div class="myPronos-sqare">
                    <div class="myPronos-date">
                        <p><?= str_replace('T', ' ',substr($matches[$i]->date, 0, -4)) ?></p>
                    </div>

                    <div class="myPronos-globalscore">
                        <div class="myPronos-pronoInfos">
                            <div class="myPronos-pronoLabel">
                                <label for="prono" class="bet-title">Mon prono</label>
                                <div class="myPronos-inputScore">
                                    <div class="input-container">
                                        <input type="number" id="scoreProno" name="home_goals[]" min="0" max="10" value="<?= $pronos[$i]->score_home ?>">
                                    </div>
                                    <p class="separation">-</p>
                                    <div class="input-container">
                                        <input type="number" id="scoreProno" name="away_goals[]" min="0" max="10" value="<?= $pronos[$i]->score_away ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="myPronos-realInfos">
                            <div class="myPronos-scoreText">
                                <p class="bet-title">Score</p>
                                <p class="final-score"><?= $homeGoalResult[$i] ?> - <?= $homeGoalResult[$i] ?></p>
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
            <div class="position-button">
                <input type="submit" name="formbets" value="Valider" class="bets-button" />
            </div>
        </form>

        <!-- fin premier rectangle -->
    </div>
</div>

<?php include '../views/partials/footer.php' ?>

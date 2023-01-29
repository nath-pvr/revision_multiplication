<?php $title = 'formulaire2';
require_once 'header.php';
include 'multiplicationTables.php';
$nbrAffichage = 5; ?>

<section class="container vh-100">

        <div class="row justify-content-center">

                <h2 class="col-12 text-center" id="formTitle3"> Testez vos connaissances !</h2>

                <div id="form3" class="col-6 row justify-content-center">

                        <form method="post">
                                <?php for ($forms = 1; $forms <= $nbrAffichage; $forms++) :
                                        $number1 = rand(1, 15);
                                        $number2 = rand(1, 15);
                                        $multiply = $number1 . " x " . $number2 . " ="; ?>


                                        <div class="form-group row">
                                                <label for="multiplication" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                        <input type="text" name="table<?= $forms ?>" id="table" readonly value="<?php echo $multiply ?>">
                                                        <input type="hidden" name="result<?= $forms ?>" value=<?php echo $number1 * $number2; ?>>

                                                </div>
                                        </div>

                                        <div class="form-group row">
                                                <label for="inputAnswer" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                        <input id="answerForm3" name="answer<?= $forms ?>" class="form-control" id="inputAnswer">
                                                </div>
                                        </div>


                                <?php endfor; ?>

                                <button class="col-10 offset-2 " id="buttonForm3" type="submit">Valider</button>
                                <!-- génerer 5 multiplication random -->

                        </form>
                </div>

                <div id="scoreBoardContainer" class="col-6"  >
                        <!-- tableau de score  -->
                        <?php if (isset($_POST["table1"])) : ?>
                                <table id="scoreBoard" class="table table-bordered table-dark">
                                        <thead>
                                                <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col">Mutiplication</th>
                                                        <th scope="col">Réponse donnée</th>
                                                        <th scope="col">Réponse attendue</th>
                                                        <th scope="col">Juste / Faux</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <?php for ($i = 1; $i <= $nbrAffichage; $i++) : ?>
                                                        <tr>
                                                                <th scope="row"><?= $i ?></th>
                                                                <td><?= $_POST["table$i"]; ?></td>
                                                                <td><?= $_POST["answer$i"]; ?></td>
                                                                <td><?= $_POST["result$i"]; ?></td>
                                                                <td>
                                                                        <?php if ($_POST["answer$i"] === $_POST["result$i"]) {
                                                                                echo " Bravo vous avez Juste !";
                                                                        } else {
                                                                                echo " Désolé ! Réessayez !!!";
                                                                        } ?>
                                                                </td>
                                                        </tr>
                                                <?php endfor; ?>
                                        </tbody>
                                </table>
                        <?php endif; ?>
                </div>

        </div>
</section>
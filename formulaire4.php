<?php $title = "Multipli Quizz";
require_once 'header.php';
include 'multiplicationTables.php';?>

<section class="formulaire4">
        <div class="container">
                <div class="row vh-100">
                        <h2 id="form4Title" class="col-12 row justify-content-center" >MultipliQuizz !!!! </h2>


                        <div id="formContainer" class="col-12 justify-content-center">

                                <!-- formulaire php pour choisir une table à réviser -->
                                <?php if (!isset($_POST['table4_1'])):?>
                                <form class="col-8 offset-2 md-12" id="formulaire4_1" method="post" action="">
                                        <label class="row justify-content-center" for="table-select" name="table" id="labelTable4_1">Choisissez une table</label>
                                        <select class="form-control form-control-lg text-center" name="table4_1" id="tableSelect4_1">
                                                <?php for ($i = 1; $i <= 15; $i++) : ?>
                                                        <option value="<?= $i ?>">table du <?= $i ?></option>
                                                <?php endfor; ?>
                                        </select>

                                        <button class=" buttonTable4_1 col-6 offset-3" type="submit"> Afficher </button>

                                </form>
                        </div>
                        <!-- récupérer la table sélectionner pour la multiplier par un random -->
                        <!-- random table sous forme de formulaire -->
                        <div id="randomTable4_1" class="col-5 offset-1 row justify-content-center">
                                <?php elseif (!isset($_POST['result'])):?>
                                <form method="post">
                                <div class="form-group row">
                                        <label for="multiplication" class="col-sm-2 col-form-label"></label>
                                        <?php $randomMultiplyNbr = rand(0, 10); ?>
                                        
                                        <input type="hidden" name="table4_1" value="$_POST['table4_1']">
                                        <input type="text" name="table<?= $_POST["table4_1"] ?>" id="table" readonly value="<?php echo $_POST['table4_1'] . "x" . "$randomMultiplyNbr" ?>">
                                        <input type="hidden" name="result" value=<?php echo $_POST['table4_1'] * $randomMultiplyNbr; ?>>
                                

                                </div>


                                <div class="form-group row">
                                        <label for="inputAnswer4_1" class="col-sm-2 col-form-label"></label>

                                        <div class="col-2 sm-10">
                                                <input name="answer" type="number" class="form-control" id="answer4_1">
                                        </div>
                                </div>

                                <button id="button" class=" buttonTable4_1 col-6 offset-3" type="submit"> Vérifier </button>
                        
                        </form>
                        <div id="verita" class="col-12">
                                <?php else:
                                        veritaSerum();
                                
                                
                        endif;?>

                        </div>

                       





                </div>
        </div>
</section>
<?php $title = "formulaire1";
require_once 'header.php';
include 'multiplicationTables.php'; ?>

<section class="formulaire1">

    <div class="container">

        <div class="row vh-100 ">

                    <h2 id="oneTable" class="col-12">
                        Choisissez une table de multiplication à réviser !
                    </h2>

            <div id="formContainer" class="col-6">
                
                <!-- formulaire php pour choisir une table à réviser -->
                <form class="col-8 offset-2 md-12" id="formulaire1" name="formulaire1" method="post" action="">
                    <label class="row justify-content-center" for="table-select" name="table" id="labelTable1">Choisissez une table</label>
                    <select class="form-control form-control-lg" name="table" id="tableSelect">
                        <?php for ($i = 1; $i <= 15; $i++) : ?>
                            <option value="<?= $i ?>">table du <?= $i ?></option>
                        <?php endfor; ?>
                    </select>

                    <button id="button" class="col-6 offset-3" type="submit"> Afficher </button>

                </form>
            </div>

            <!-- affichage de la table à réviser -->
            <div id="viewTable" class="col-6 row justify-content-center">
                <p>
                    <?php
                    if (isset($_POST['table'])) {
                        multiplicationTable($_POST['table']);
                    } ?>

                </p>


            </div>



        </div>

    </div>

    </div>

</section>

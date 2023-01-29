<?php $title = 'formulaire2';
require_once 'header.php';
include 'multiplicationTables.php'; ?>

<section class="formulaire2 vh-100">

    <div class="container">

        <div class="row vh-100 ">

            <h2 id="form2Title" class="col-12 text-center">
                Choisissez vos tables de multiplications pour les réviser !
            </h2>


            <div id="form2Container" class="col-12">

                <!-- formulaire php pour choisir une table à réviser -->
                <form method="post" id="formulaire2" class="row justify-content-center">
                    <div class="col-12 row justify-content-center">
                        <?php for ($i = 1; $i <= 15; $i++) : ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="check<?= $i ?>" type="checkbox" value="<?= $i ?>" id="check <?= $i ?>">
                                <?php if (!empty($_POST) && isset($_POST["check$i"]) && $i === intval($_POST["check$i"])); ?>

                                <label class="form-check-label" for="check<?= $i ?>"><?= $i ?></label>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <button id="button" class="flex-wrap" type="submit">Afficher </button>

                </form>
            </div>

            <!-- affichage de la table à réviser -->
            <div id="viewTable2" class="row col-12">
               <?php

                        for ($i = 1; $i <= 15; $i++) { 
                                        
                            if (isset($_POST["check$i"])) {
                                echo "<div id='tableSelected' class='col-3 offset-1'>";
                                echo "<p class='text-center'>" ;
                                multiplicationTable($_POST["check$i"]);
                                echo "</p>";
                                echo "</div>";
                            }
                
                        }
                        ?>
                
            </div>
        </div>
    </div>
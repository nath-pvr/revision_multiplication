<?php $title = "Accueil";
require_once 'header.php'; ?>


<!-- présentation succinte du site plus affichage random d'une table de multiplication -->
<section class="container vh-100">
    <div id="presentation" class="row ">


        <div id="description" class="col-4 flex-column offset-2">
            <!-- présentation du site -->
            <h2 class=" row justify-content-center ">Multiplica Révision</h2><br>
            <p>
                Multiplica Révision est un site vous permettant d'apprendre et ou réviser vos tables de multiplication de 1 à 15.
            </p>
        </div>

        <div id="randomTable" class="col-5 offset-1 row justify-content-center">
            <p>

                <?php
                include 'multiplicationTables.php';
                multiplicationTable(rand(1, 15));
                ?>
                <!-- random table -->
            </p>
        </div>
    </div>
</section>

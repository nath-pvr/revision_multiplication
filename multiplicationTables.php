<?php

function multiplicationTable($number)
{
    for ($loop = 0; $loop <= 10; $loop++) {
        $result = ($loop * $number);
        $loop * $number == $result;
        echo "$loop x $number = $result" . "<br>";
    }
}

function randomTable()
{ 
         $multiply = rand(1,15);
         $number = rand(1,10);                                     
    echo "$multiply * $number = ";
}

function veritaSerum()
{
        if ( $_POST['answer'] === $_POST['result']){
        echo " <p class='verita row justify-content-center'> Bravo ! vous avez juste !!! </p>";
        } else {
        echo "<p class='verita row justify-content-center'> Désolé ! Vous avez faux !!! </p>";
        }
}

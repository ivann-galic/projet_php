<?php

Class StoriesAndMembers
{

    public function displayMembers($name1, $name2, $name3){
        echo '<p> Membres du groupe : '.$name1.', '.$name2.', '.$name3.'. </p>';
    }

    public function displayStories($number1, $number2){
        echo '<p> Nombres de stories réalisées/en attente : '.$number1.'/'.$number2.'. </p>';
    }

    public function displayFinishedStories($array){
        echo '<p> Stories terminées : </p>';
        foreach ($array as $value) {
            echo '<p> - '.$value.' </p>';
        }
    }

    public function displayPendingStories($array){
        echo '<p> Stories en attente : </p>';
        foreach ($array as $value) {
            echo '<p> - '.$value.' </p>';
        }
    }
}

?>

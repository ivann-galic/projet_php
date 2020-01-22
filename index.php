<?php

    include "header.php";
    require "Backlog.php";
    require "Date.php";
    require "Formulaire.php";
echo '<div class="espaceCarte">
            <div class="titreStory"><p>Story 1</p></div>
            <div class="carte">';

$date = new Date ();
$date->getDateNow();

$members = new Backlog();
    echo $members -> displayMembers("Antoine", "Boris", "Ivann");
    echo $members -> displayStories(1, 16);

    $stories = new StoriesAndMembers();
    $listFinishedStories = array();
    $listPendingStories = array();
    array_push($listFinishedStories, "story 1");
    $stories -> displayFinishedStories($listFinishedStories);

    array_push($listPendingStories, "story 2", "story 3", "story 4", "story 5", "story 6", "story 7", "story 8",
        "story 9", "story 10", "story 11", "story 12", "story 13", "story 14", "story 15", "story 16");
    $stories -> displayPendingStories($listPendingStories);

    echo '</div>
	</div>';

    //----------------------Story 4------------------------//
    echo '<div class="espaceCarte">
            <div class="titreStory"><p>Story 4</p></div>
            <div class="carte">';
    <form action = "" method= "post">
    $formDate = new Formulaire();
    $formDate->getInputTypeText('age');
    $formDate->displayButton();


    echo '</div>
	</div>';
    echo '</body>';


    include "footer.php";


?>
<?php

    include "header.php";
    require "StoriesAndMembers.php";


echo '<div class="espaceCarte">
            <div class="titreStory"><p>Story 1</p></div>
            <div class="carte">';

$members = new StoriesAndMembers();
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




    echo '</body>';

    include "footer.php";


?>
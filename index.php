
<?php

    include "header.php";
    include "footer.php";
    require "StoriesAndMembers.php";
    require "Date.php";
    require "Form.php";
    require "Calc.php";
// --- STORY 1 --- //
?>
            <div class="espaceCarte">
            <div class="titreStory"><p>Story 1</p></div>
            <div class="carte">';
<?php
$date = new Date ();
$date->getDateNow();

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
    ?>
    '</div>
	</div>';

    // --- STORY 2 --- //
   <div class="espaceCarte">
                <div class="titreStory"><p>Story 2</p></div>
                <div class="carte">

    <form method="get">
    <?php
    $myFormStory2 = new Form();
    $myFormStory2 -> input("Chiffre");
    $myFormStory2 -> button("submit", "Soumettre la réponse");

   if(sizeof($_GET)>0) {
       $nbr =  (int)($_GET['Chiffre']);
      // echo $nbr;
       $myCalc = new Calc();
       $myCalc->displayNbPremiers(10);

        //$nbr = new Form($myFormStory2($GET_Chiffre['Chiffre']);
        //$myCalc -> displayNbPremiers();

    }
   ?>
    </form>
                </div>
   </div>


    //----------------------Story 4------------------------//
    <div class="espaceCarte">
            <div class="titreStory"><p>Story 4</p></div>
            <div class="carte">
    <form action = "" method= "post">
<?php
    $formDate = new Form();
    $formDate->getInputTypeText('age');
    $formDate->displayButton();
?>


    </div>
	</div>
    </body>






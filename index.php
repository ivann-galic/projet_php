<?php
    include "php/header.php";
    require "php/StoriesAndMembers.php";
    require "php/Date.php";
    require "php/Form.php";
    require "php/Calc.php";
?>

<!--    --- STORY 1 ----->
    <div id="ancre1" class="espaceCarte carteStory1">
        <div class="titreStory"><p>Story 1</p></div>
        <div class="carte">

            <?php
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

        </div>
    </div>

<!--    --- STORY 3 ----->
    <div id="ancre3" class="espaceCarte">
        <div class="titreStory"><p>Story 3</p></div>
        <div class="carte">
            <form method="post">
                <?php
                echo 'Entrez 1 chiffre pour générer les nombres premiers qui le précèdent :<br><br>';
                $myFormStory2 = new Form();
                $myFormStory2 -> input("chiffre", "number");
                $myFormStory2 -> button("submit", "Soumettre la réponse");

                if(sizeof($_POST)>0) {
                    $nbr = ($_POST['chiffre']);
                    echo "Les nombres premiers entre 0 et ".$nbr." sont : ";
                    $myCalc3 = new Calc();
                    $myCalc3 -> displayPrimeNumbers($nbr);
                }
                ?>
            </form>
        </div>
    </div>

<!--    --- STORY 4 ----->
    <div id="ancre4" class="espaceCarte">
        <div class="titreStory"><p>Story 4</p></div>
        <div class="carte">
            <form method= "post">
                <?php
                echo 'Entrez 1 nombre de secondes afin de connaître la date de l\'évènement antérieur :<br><br>';

                $formDate = new Form();
                $formDate->input('secondes', "text");
                $formDate->button("submit", "Soumettre la réponse");

                if(sizeof($_POST)>0) {
                    $temps = $_POST['secondes'];
                    $date = new Date();
                    $date->getDateNow($temps);
                }
                ?>
            </form>
        </div>
    </div>

<!--    --- STORY 5 ----->
<div id="ancre5" class="espaceCarte">
    <div class="titreStory"><p>Story 5</p></div>
    <div class="carte">
        <form method= "post">
            <?php
                echo 'Entrez 3 chiffres :<br><br>';

                $myFormStory5FirstNumber = new Form();
                $myFormStory5FirstNumber -> input("Premier:", "number");

                $myFormStory5FSecondNumber = new Form();
                $myFormStory5FSecondNumber -> input("Second:", "number");

                $myFormStory5FTroisiemeNumber = new Form();
                $myFormStory5FTroisiemeNumber -> input("Troisième:", "number");

                $myFormStory5Button = new Form();
                $myFormStory5Button -> button("submit", "Soumettre la réponse");

                if(sizeof($_POST)>0) {
                    $minNb = new Calc();
                    $result5 = $minNb->smallerNumber($_POST['Premier:'], $_POST['Second:'], $_POST['Troisième:']);
                    echo "Le plus petit nombre est: $result5";
            }
            ?>
        </form>
    </div>
</div>

<!--    --- STORY 7 ----->
<div id="ancre7" class="espaceCarte">
    <div class="titreStory"><p>Story 7</p></div>
    <div class="carte">
        <form method= "post">
            <?php
            echo 'Entrez 1 chiffre pour découvrir son résultat factoriel :<br><br>';

            $myFormStory7 = new Form();
            $myFormStory7-> input("chiffre:", "number");
            $inputNumber7 = ($_POST['chiffre:']);
            $myFormStory7Button = new Form();
            $myFormStory7Button -> button("submit", "Soumettre la réponse");

            if(sizeof($_POST)>0) {
                $toFactorize = new Calc();
                $result7 = $toFactorize -> factorial($inputNumber7);
                echo "Le résultat factiel est : $result7";
            }

            ?>
        </form>
    </div>
</div>

<!--    --- STORY 10 ----->
<div id="ancre10" class="espaceCarte">
    <div class="titreStory"><p>Story 10</p></div>
    <div class="carte">
        <form method= "post">
            <?php
            echo 'Entrer une adresse mail :<br><br>';

            $myFormStory10 = new Form();
            $myFormStory10-> input("mail:", "text");

            $myFormStory10Button = new Form();
            $myFormStory10Button -> button("submit", "Enregistrer le mail");

            if(sizeof($_POST)>0) {
            $enteredNail = new Form;
            $enteredNail -> verifyMail($_POST['mail:']);
            }

            ?>
        </form>
    </div>

    <div id="double" class="carte">
        <form method= "post">
            <?php

            echo 'Entrer une date de naissance :<br><br>';
            $myFormStory10bis = new Form();
            $myFormStory10bis-> input("date:", "text");

            $myFormStory10bisButton = new Form();
            $myFormStory10bisButton -> button("submit", "Enregistrer la date de naissance");
            if(sizeof($_POST)>0) {
                $enteredBirthDate = new Form;
                $enteredBirthDate -> verifyBirthDate($_POST['date:']);
            }

            ?>
        </form>
    </div>
</div>

<!--    --- STORY 11 ----->
<div id="ancre11" class="espaceCarte">
    <div class="titreStory"><p>Story 11</p></div>
    <div class="carte">
        <form method= "post">
            <?php
            echo 'Entrez une liste de prénoms séparés par des virgules :<br><br>';

            $myFormStory11 = new Form();
            $myFormStory11-> input("prénoms:", "text");
            $inputNumber11 = ($_POST['prénoms:']);
            $myFormStory7Button = new Form();
            $myFormStory7Button -> button("submit", "Soumettre la liste");

            if(sizeof($_POST)>0) {
                $myValues11 = new Form($_POST['prénoms:']);
            }

            ?>
        </form>
    </div>


<?php
include "footer.php";
?>







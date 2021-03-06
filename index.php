<?php
    include "php/header.php";
    require "php/StoriesAndMembers.php";
    require "php/Date.php";
    require "php/Form.php";
    require "php/Calc.php";
    require "php/ConvertToRoman.php";
    require "php/FirstName.php";
?>

<!--    --- STORY 1 ----->
    <div id="ancre1" class="espaceCarte carteStory1">
        <div class="titreStory"><p>Story 1</p></div>
        <div class="carte">

            <?php
            $members = new StoriesAndMembers();
            echo $members -> displayMembers("Antoine", "Boris", "Ivann");
            echo $members -> displayStories(13, 16);
            ?>

            <div class="storiesDone">
                <?php
                $stories = new StoriesAndMembers();
                $listFinishedStories = array();
                $listPendingStories = array();
                array_push($listFinishedStories, "story 1", "story 2", "story 3", "story 4", "story 5", "story 6", "story 7", "story 8",
                    "story 9", "story 10", "story 12", "story 15", "story 16");
                $stories -> displayFinishedStories($listFinishedStories);
                ?>
            </div>
            <div class="storiesWaiting">
                <?php
                array_push($listPendingStories,"story 11", "story 13", "story 14");
                $stories -> displayPendingStories($listPendingStories);
                ?>
            </div>
        </div>
    </div>

<!--    --- STORY 3 ----->
    <div id="ancre3" class="espaceCarte">
        <div class="titreStory"><p>Story 3</p></div>
        <div class="carte">
            <form method="post">
                <?php
                echo '<p>Entrez 1 chiffre pour générer les nombres premiers qui le précèdent :</p>';
                $myFormStory2 = new Form();
                $myFormStory2 -> input("chiffre", "number");
                $myFormStory2 -> button("submit", "Soumettre la réponse");

                if(sizeof($_POST)>0) {
                    $nbr = ($_POST['chiffre']);
                    echo "<p>Les nombres premiers entre 0 et ".$nbr." sont :</p>";
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
                echo '<p>Entrez 1 nombre de secondes afin de connaître la date de l\'évènement antérieur :</p>';

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
                echo '<p>Entrez 3 chiffres :</p>';

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
                    echo "<p>Le plus petit nombre est: $result5</p>";
            }
            ?>
        </form>
    </div>
</div>

<!----- STORY 6 ----->


<div id ="ancre6" class="espaceCarte">
    <div class="titreStory"><p>Story 6</p></div>
    <div class="carte">
        <form method="post">
            <?php
                echo '<p>Donnez nous un chiffre entre 1 et 4000</p>';

                $formRom = new Form();
                $formRom->input("Chiffre", "text");
                $formRom->button("submit", "Soumettre la réponse");

                if(sizeof($_POST)>0) {
                    $number = new ConvertToRoman();
                    $number->convNumberToRoman($_POST["Chiffre"]);

                    //$result5 = $minNb->smallerNumber($_POST['Premier:'], $_POST['Second:'], $_POST['Troisième:']);
                //echo "Le plus petit nombre est: $result5";
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
            echo '<p>Entrez 1 chiffre pour découvrir son résultat factoriel :</p>';

            $myFormStory7 = new Form();
            $myFormStory7-> input("chiffre:", "number");
            $inputNumber7 = ($_POST['chiffre:']);
            $myFormStory7Button = new Form();
            $myFormStory7Button -> button("submit", "Soumettre la réponse");

            if(sizeof($_POST)>0) {
                $toFactorize = new Calc();
                $result7 = $toFactorize -> factorial($inputNumber7);
                echo "<p>Le résultat factiel est : $result7</p>";
            }

            ?>
        </form>
    </div>
</div>

<!--    --- STORY 8 ----->
<div id="ancre8" class="espaceCarte">
    <div class="titreStory"><p>Story 8</p></div>
    <div class="carte">
        <form method= "post">
            <?php
            echo '<p>Entrez 1 chiffre pour le convertir en hexadecimal :</p>';

            $myFormStory8 = new Form();
            $myFormStory8-> input("chiffre:", "number");
            $inputNumber8 = ($_POST['chiffre:']);
            $myFormStory8Button = new Form();
            $myFormStory8Button -> button("submit", "Soumettre la réponse");

            if(sizeof($_POST)>0) {
                $toHexa = new Calc();
                $result8 = $toHexa -> numberToHexa($inputNumber8);
                echo "<p> La conversion en hexa est : $result8</p>";
            }
            ?>
        </form>
    </div>
</div>

<!--    --- STORY 9 ----->
<div id="ancre9" class="espaceCarte">
    <div class="titreStory"><p>Story 9</p></div>
    <div class="carte">
        <form method= "post">
            <?php
            echo '<p>Entrez 1 chiffre pour le convertir en binaire :</p>';

            $myFormStory9 = new Form();
            $myFormStory9-> input("chiffre:", "number");
            $inputNumber9 = ($_POST['chiffre:']);
            $myFormStory9Button = new Form();
            $myFormStory9Button -> button("submit", "Soumettre la réponse");

            if(sizeof($_POST)>0) {
                $toBinary = new Calc();
                $result9 = $toBinary -> numberToBinary($inputNumber9);
                echo "<p> La conversion en binaire est : $result9</p>";
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
            echo '<p>Entrer une adresse mail :</p>';

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

            echo '<p>Entrer une date de naissance :</p>';
            $myFormStory10bis = new Form();
            $myFormStory10bis-> input("date:", "text");

            $myFormStory10bisButton = new Form();
            $myFormStory10bisButton -> button("submit", "Enregistrer la date de naissance");
            if(sizeof($_POST)>0) {
                $enteredBirthDate = new Form();
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
            echo '<p>Entrez une liste de prénoms séparés par des virgules :</p>';

            $myFormStory11 = new Form();
            $myFormStory11-> input('prenoms:', "text");
            $inputNumber11 = ($_POST['prenoms:']);
            $myFormStory7Button = new Form();
            $myFormStory7Button -> button("submit", "Soumettre la liste");

            if(sizeof($_POST)>0) {
                    echo "test" . $_POST['prenoms:'];
                    $splitPrenom = new FirstName();
                    $splitPrenom->firstNameSplit($_POST['prenoms:']);

            }
            ?>
        </form>
    </div>

<?php
include "footer.php";
?>







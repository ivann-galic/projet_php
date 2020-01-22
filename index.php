<?php
    include "header.php";
    include "footer.php";
    require "StoriesAndMembers.php";
    require "Date.php";
    require "Form.php";
    require "Calc.php";
?>

<!--    --- STORY 1 ----->
    <div id="carteStory1" class="espaceCarte">
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
    <div class="espaceCarte">
        <div class="titreStory"><p>Story 3</p></div>
        <div class="carte">
            <form method="post">
                <?php
                $myFormStory2 = new Form();
                $myFormStory2 -> input("chiffre", "number");
                $myFormStory2 -> button("submit", "Soumettre la réponse");
                if(sizeof($_POST)>0) {
                    $nbr = ($_POST['chiffre']);
                    // echo $nbr;
                    $myCalc3 = new Calc();
                    $myCalc3 -> displayPrimeNumbers($nbr);

                }
                ?>
            </form>
        </div>
    </div>

<!--    --- STORY 4 ----->
    <div class="espaceCarte">
        <div class="titreStory"><p>Story 4</p></div>
        <div class="carte">
            <form method= "post">
                <?php
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
<div class="espaceCarte">
    <div class="titreStory"><p>Story 5</p></div>
    <div class="carte">
        <form method= "post">
            <?php
            echo 'Entrez 3 chiffres :<br>';

            $myFormStory5FirstNumber = new Form();
            $myFormStory5FirstNumber -> input("Premier:", "number");
            $minNb1 = ($_POST['Premier:']);

            $myFormStory5FSecondNumber = new Form();
            $myFormStory5FSecondNumber -> input("Second:", "number");
            $minNb2 = ($_POST['Second:']);

            $myFormStory5FTroisiemeNumber = new Form();
            $myFormStory5FTroisiemeNumber -> input("Troisième:", "number");
            $minNb3 = ($_POST['Troisième:']);

            $myFormStory5Button = new Form();
            $myFormStory5Button -> button("submit", "Soumettre la réponse");


            $minNb = new Calc();
            $minNb -> smallerNumber($minNb1, $minNb2, $minNb3);
            ?>
        </form>
    </div>
</div>

<!--    --- STORY 7 ----->
<div class="espaceCarte">
    <div class="titreStory"><p>Story 7</p></div>
    <div class="carte">
        <form method= "post">
            <?php
            echo 'Entrez 1 chiffre pour découvrir son résultat factoriel :<br>';

            $myFormStory7 = new Form();
            $myFormStory7-> input("truc", "number");
            $inputNumber7 = ($_POST['truc']);
            $myFormStory7Button = new Form();
            $myFormStory7Button -> button("submit", "Soumettre la réponse");

            $toFactorize = new Calc();
            $toFactorize -> factorial($inputNumber7);
            ?>
        </form>
    </div>
</div>






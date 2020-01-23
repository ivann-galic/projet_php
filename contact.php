<?php
include "php/header.php";
include "php/footer_contact.php";
require "php/Request.php";
require "php/Person.php";
require "php/Form.php";
?>

<!----- STORY 12 ----->

<div class="espaceCarte">
        <div id="carteStory12" class="titreStory"><p>Story 12 </p></div>
        <div class="carte">
            <form method="post">
                <?php

                $myFormStory12 = new Form();
                $myFormStory12 -> input('Nom', "text");
                $myFormStory12 -> input('Prenom', "text");
                $myFormStory12 -> input('Naissance', "text");
                $myFormStory12 -> input('Sexe', "text");
                $myFormStory12 -> input('Mail', "mail");
                $myFormStory12 -> input('Adresse', "text");
                $myFormStory12 -> button("submit", "Soumettre la réponse");
                ?>

                </form>

            <?php
            $bdd = new Request('mysql', 'localhost', 'personnes', 'root', 'root');
            $bdd->getmybdd();

            if(sizeof($_POST)>0){
                $pers = new Person($_POST['Nom'],$_POST['Prenom'],$_POST['Naissance'],$_POST['Sexe'],$_POST['Mail'], $_POST['Adresse']);
                $bdd->setInsert($pers->getName(),$pers->getFirstName(), $pers->getBirthday(), $pers->getSexe(),$pers->getMail(), $pers->getAdress());
            }
            ?>

        </div>
    </div>

<?php

?>
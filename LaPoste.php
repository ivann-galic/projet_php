<?php
include "php/header.php";
include "php/footer_contact.php";
require "php/Form.php";
require "php/PostPage.php"
?>

<!--    --- STORY 15 ----->
<div id="ancre15" class="espaceCarte">
    <div class="titreStory"><p>Story 15</p></div>
    <div class="carte">

        <form method= "post">
            <?php
                echo '<p>Expéditeur :</p>
                    <select name="Expéditeur">
                        <option>CASSEL Boris </option>
                        <option>GALIC Ivann</option>
                        <option>NOUHAUD Antoine</option>
                        <option>Coding Factory</option>
                        <option>Centre des Impôts</option>
                        <option>POUDLARD</option>
                    </select>
        
                    <p>Destinataire :</p>
                    <select name="Destinataire">
                        <option>CASSEL Boris </option>
                        <option>GALIC Ivann</option>
                        <option>NOUHAUD Antoine</option>
                        <option>Coding Factory</option>
                        <option>Centre des Impôts</option>
                        <option>POUDLARD</option>
                    </select> <br><br>
    
                    <input type="checkbox" name="priority" value="priority">Timbre prioritaire<br><br>
                    <input type="checkbox" name="confidential" value="confidential">Confidentiel<br><br>';

                $myForm = new Form();
                $myForm -> button("submit", "Enregistrer ces options d'envoi");

                if(sizeof($_POST)>0) {
                    $myPost = new PostPage();
                    $myPost->menuSelected($_POST['Expéditeur'], $_POST['Destinataire']);
                }
            ?>
    </div>
</div>

<?php

?>

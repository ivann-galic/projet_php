<?php

    Class PostPage {

        public function menuSelected($value1, $value2) {
            if ("$value1" == "$value2") {
                echo '<br>Vous devez sélectionner un expéditeur et un destinataire différent.';
            }
        }
    }
?>

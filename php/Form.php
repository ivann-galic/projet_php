<?php

/**
 * Class Form traite de tous les formulaires appelés sur l'ensemble du site
 */
Class Form
{
    /**Fonction servant à factoriser la production des lable et input
     * @param $value
     * @param $type
     */
    public function input($value, $type){
        echo '<label for="'.$value.'">'.$value.'</label>';
        echo '<input type="'.$type.'" id="'.$value.'" name="'.$value.'"><br><br>';
    }

    /**Fonction utilisée pour générer un bouton d'envoi de formulaire
     * @param $action
     * @param $texte
     */
    public function button($action, $texte) {
        echo '<input type="'.$action.'" value="'.$texte.'"><br>';
    }

    /**Fonction servant à vérifier la conformité d'une adresse mail indiquée dans un formulaire
     * @param $mail
     */
    public function verifyMail($mail) {

        if ((preg_match("'.*[@].*\..*'", $mail)) && (strlen($mail) > 3) ) {
            echo "L'adresse mail entrée est valide.";
        } else {
            echo "L'adresse mail entrée est invalide, veuillez recommencer.";
        }
    }

    public function verifyBirthDate($birthdate) {

        if (preg_match("/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{2}$/", $birthdate)) {
            echo "La date entrée est valide.";
        } else {
            echo "La date entrée n'est pas valide, veuillez recommencer avec des valeurs correctes et au format JJ/MM/AA";
        }
    }


}
?>
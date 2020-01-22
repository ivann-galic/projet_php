<?php

Class Form
{
    public function input($value){
    echo '<label for="'.$value.'">'.$value.'</label>';
    echo '<input type="text" id="'.$value.'" name="'.$value.'"><br>';
    }
    public function button($action, $texte) {
    echo '<input type="'.$action.'" value="'.$texte.'">';
    }
}
?>
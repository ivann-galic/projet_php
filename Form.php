<?php

Class Form
{
    public function input($value, $type){
    echo '<label for="'.$value.'">'.$value.'</label>';
    echo '<input type="'.$type.'" id="'.$value.'" name="'.$value.'"><br>';
    }
    public function button($action, $texte) {
    echo '<input type="'.$action.'" value="'.$texte.'"><br>';
    }
}
?>
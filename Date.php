<?php
class Date {
    private $dateNow;
    private $dateUser;


    public function getDateNow($dateUser)
    {
        try{
            $dateNow = time();
            $result = $dateNow - $dateUser;
            echo "L'evenement a eu lieu le ". date('d/m/Y', $result);
        }catch(Exception $e){
        echo "Erreur ! Entrez un nombre de secondes";
    }

    }


}
?>

<?php

/**
 * La classe Date est utilisée pour transformer une imput en secondes en dates sous le format jour-mois-année.
 */
class Date {
    private $dateNow;
    private $dateUser;


    /**La fonction getDateNow prend des secondes en paramétres et le sdéduit de la date et de l'heure du jour
     * @param $dateUser
     */
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

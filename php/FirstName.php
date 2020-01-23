<?php


/**
 * Class FirstName : cette classe essaye, sans succès, de réorganiser trois noms en fonction de l'ordre alphabétique de leur deuxiéme lettre.
 * Classe non terminée.
 */
class FirstName
{
    private $_firstnames;

    /**Fonction qui ne sert à rien, non terminée
     * @param $_firstnames
     */
    public function firstNameSplit ($_firstnames){
        $firstnamesToSplit = preg_split("/\,/", $_firstnames);
        echo implode($firstnamesToSplit);
        echo "premier cas " . $firstnamesToSplit[0];
        echo explode($firstnamesToSplit[1]);

        echo "tentative" . implode(preg_split ( "[a-z]",$firstnamesToSplit[0]));
        //echo "slicing" . explode(".",$firstnamesToSplit[1]), 2);


        //str_replace[$_firstnamesToSplit[0][0], $_firstnamesToSplit[Ø][$_firstnamesToSplit]]
    }


}
?>
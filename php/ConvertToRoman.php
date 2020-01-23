<?php


class ConvertToRoman
{

    /**
     * Convertit un nombre dans sa version chiffres romains
     * solution trouvée sur internet
     * @param $num chiffre ou nombre
     **/
    function numberToRomanInternet($num)
    {

        // concvertit en entier, pas de valeuirs déciomales en romain, ni de zéro
        $n = intval($num);
        $result = '';

        // table de correspondance
        $tableCorres = array(
            'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
            'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
            'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
        );

        // boucle sur le tableau de correspondance sur chaque valeur
        foreach ($tableCorres as $roman => $value) {
            // on regarde le nombre de correspondances
            $matches = intval($n / $value);

            // on concatene les caracactéres
            $result .= str_repeat($roman, $matches);

            // et on soustrait au nombre
            $n = $n % $value;
        }

        return $result;
    }

// deuxieme methode, la mienne, moins académique, de 1 à 4000

    public function convNumberToRoman($number)
    {

        //$numberInv = strrev ($number);
        // on vérifie la longueur
        $taille = strlen($number);
        // on splite la variable pour en extraire un tableau
        $numberTab = str_split($number);

        // test : echo "========>>>>> ". $taille;

        // on entre dans des switch case pour convertir le premier chiffre à l'indice 0
        switch ($numberTab[$taille - 1]) {
            case "1":
                $numberTab[$taille - 1] = "I";
                break;

            case "2":
                $numberTab[$taille - 1] = "II";
                break;

            case "3":
                $numberTab[$taille - 1] = "III";
                break;

            case "4":
                $numberTab[$taille - 1] = "IV";
                break;

            case "5":
                $numberTab[$taille - 1] = "V";
                break;

            case "6":
                $numberTab[$taille - 1] = "VI";
                break;

            case "7":
                $numberTab[$taille - 1] = "VII";
                break;

            case "8":
                $numberTab[$taille - 1] = "VIII";
                break;

            case "9":
                $numberTab[$taille - 1] = "IX";
                break;

            default:
                echo " ";
        }

        // deuxiéme chiffre en partant de la droite
        switch ($numberTab[$taille - 2]) {
            case "1":
                $numberTab[$taille - 2] = "X";
                break;

            case "2":
                $numberTab[$taille - 2] = "XX";
                break;

            case "3":
                $numberTab[$taille - 2] = "XXX";
                break;

            case "4":
                $numberTab[$taille - 2] = "XL";
                break;

            case "5":
                $numberTab[$taille - 2] = "L";
                break;

            case "6":
                $numberTab[$taille - 2] = "LX";
                break;

            case "7":
                $numberTab[$taille - 2] = "LXX";
                break;

            case "8":
                $numberTab[$taille - 2] = "LXXX";
                break;

            case "9":
                $numberTab[$taille - 2] = "XC";
                break;

            default:
                echo " ";
        }

        // on traitre les centaines
        switch ($numberTab[$taille - 3]) {
            case "1":
                $numberTab[$taille - 3] = "C";
                break;

            case "2":
                $numberTab[$taille - 3] = "CC";
                break;

            case "3":
                $numberTab[$taille - 3] = "CCC";
                break;

            case "4":
                $numberTab[$taille - 3] = "CD";
                break;

            case "5":
                $numberTab[$taille - 3] = "D";
                break;

            case "6":
                $numberTab[$taille - 3] = "DC";
                break;

            case "7":
                $numberTab[$taille - 3] = "DCC";
                break;

            case "8":
                $numberTab[$taille - 3] = "DCCC";
                break;

            case "9":
                $numberTab[$taille - 3] = "CM";
                break;

            default:
                echo " ";
        }
        // on traite les milliers
        switch ($numberTab[$taille - 4]) {

            case "1":
                $numberTab[$taille - 4] = "M";
                break;

            case "2":
                $numberTab[$taille - 4] = "MM";
                break;

            case "3":
                $numberTab[$taille - 4] = "MMM";
                break;

            case "4":
                $numberTab[$taille - 4] = "MMMM";
                break;

            default:
                echo " ";
        }
        echo "le nombre romain est " . implode($numberTab);
    }
}
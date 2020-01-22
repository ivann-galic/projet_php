<?php
Class Calc
{

    function affichePremiers($n){
        echo "Les nombres premiers entre 0 et ".$n." sont : ";
        $negative = false;
        if($n<0){
            $negative = true;
            $n = -$n;
        }

        for($i=2;$i<=$n;$i++){

            $nbDiv = 0;
            // Counts the number of divisors
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $nbDiv++;

                }
            }
            if($nbDiv == 2){
                if($negative){
                    echo "-";
                }
                echo $i.", ";
            }
        }
        if ($n == 1) {
            echo "1 n'a pas de nombre premier qui le précède.";
        }
    }

}
?>

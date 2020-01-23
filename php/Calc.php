<?php
Class Calc
{

    function displayPrimeNumbers($n){

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

    function smallerNumber($number1, $number2, $number3) {

        if ($number1 <=  $number2){
            $smallerNb1 = $number1;
        } else {
            $smallerNb1 = $number2;
        }

        if ($number2 <=  $number3){
            $smallerNb2 = $number2;
        } else {
            $smallerNb2 = $number3;
        }

        if ($smallerNb1 <=  $smallerNb2){
            return $smallerNb1;
        } else {
            return $smallerNb2;
        }

    }

    function factorial($number)
    {

        if ($number != 0) {
            for ( $i = $number-1; $i >= 1 ; $i--){
                $number = $number * $i;
            }
        }
        return $number;
    }

    function numberToBinary($number) {

        $remains = array();

        while($number != 0)
        {
            $remains[] = $number%2;
            $number = intval($number/2);
        }
        $remains = array_reverse($remains);
        $bin = '';
        foreach ( $remains as $num )
            $bin .= $num;

        return $bin;
        }

}
?>

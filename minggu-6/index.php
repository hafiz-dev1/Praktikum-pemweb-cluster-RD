<?php

// M=1000 D=500 C=100 L=50 X=10 V=5 I=1

function romanConvert($int)
{
    $results = "";
    if ($int < 1 || $int > 5000) { 
        // kondisi percabangan dalam rentang 1 sampai dengan 5000
        $results = "Batas int 1 s/d 5000";
    } else {
        while ($int >= 1000) {
            $results .= "M"; 
            $int -= 1000;
        }
    }

    if ($int >= 500) {
        if ($int > 500) {
            if ($int >= 900) {
                $results .= "CM";
                $int -= 900;
            } else {
                $results .= "D";
                $int-=500;
            }
        }
    }

    while ($int>=100) {
        if ($int>=400) {
            $results .= "CD";
            $int -= 400;
        } else {
            $int -= 100;
        }
    }

    if ($int>=50) {
        if ($int>=90) {
            $results .= "XC";
            $int -= 90;
        } else {
            $results .= "L";
            $int-=50;
        }
    }

    while ($int >= 10) {
        if ($int >= 40) {
            $results .= "XL";
            $int -= 40;
        } else {
            $results .= "X";
            $int -= 10;
        }
    }

    if ($int >= 5) {
        if ($int == 9) {
            $results .= "IX";
            $int-=9;
        } else {
            $results .= "V";
            $int -= 5;
        }
    }

    while ($int >= 1) {
        if ($int == 4) {
            $results .= "IV"; 
            $int -= 4;
        } else {
            $results .= "I";
            $int -= 1;
        }
    }
    return ($results);
}

echo romanConvert(1994);

?>
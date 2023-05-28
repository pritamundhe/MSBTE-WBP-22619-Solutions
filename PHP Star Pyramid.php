<?php
    $height=6;

    for($i=1; $i<=$height; $i++){
        for($j=1; $j<=$height-$i; $i++){
            echo "&nbsp;";
        }
        for($k=1; $k<=2*$i-1; $k++){
            echo "*";
        }
        echo"<br>";
    }

    
<?php
    $rows = 5;

    for ($i = 1; $i <= $rows; $i++) {
        // Print spaces
        for ($j = 1; $j <= ($rows - $i); $j++) {
            echo " ";
            for ($j = 1; $j <= (2 * $i - 1); $j++) {
                echo "*";
            }
            
            echo "\n";
            
        }
        
        // Print asterisks
        
    }
    
?>
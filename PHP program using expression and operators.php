<?php
    $a=5;
    $b=10;

    echo'1. Arithmetic Operators:'.'<br>';
    echo'Value of a is :'.$a.'<br>';
    echo'Value of b is :'.$b.'<br>';
    echo'Result of a + b is :'.($a+$b).'<br>';
    echo'Result of a - b is :'.($a-$b).'<br>';
    echo'Result of a * b is :'.($a*$b).'<br>';
    echo'Result of a / b is :'.($a/$b).'<br>';
    echo'Result of a % b is :'.($a%$b).'<br>';
    echo'Result of a ** b is :'.($a**$b).'<br><br>';

    echo'2. AutoIncrement and AutoDecrement Operators:'.'<br>';
    echo'Result of ++$a is : '.(++$a).'<br>';
    echo'Result of $a++ is : '.($a++).'<br>';
    echo'Result of --$a is : '.(--$a).'<br>';
    echo'Result of $a-- is : '.($a--).'<br><br>';

    echo'3. Comparison Operators:'.'<br>';
    echo'Result of a > b is :'.($a>$b).'<br>';
    echo'Result of a < b is :'.($a<$b).'<br>';
    echo'Result of a >= b is :'.($a>=$b).'<br>';
    echo'Result of a <= b is :'.($a<=$b).'<br>';
    echo'Result of a == b is :'.($a==$b).'<br>';
    echo'Result of a != b is :'.($a!=$b).'<br><br>';

    echo'4. Logical Operators:'.'<br>';
    echo'Result of a && b is :'.($a&&$b).'<br>';
    echo'Result of a || b is :'.($a||$b).'<br><br>';

    echo'5. Bitwise Operators:'.'<br>';
    echo'Result of a & b is :'.($a&$b).'<br>';
    echo'Result of a | b is :'.($a|$b).'<br>';
    echo'Result of a ^ b is :'.($a^$b).'<br><br>';
    
    echo'6. Assignment Operators:'.'<br>';
    echo'Result of a += b is :'.($a+=$b).'<br>';
    echo'Result of a -= b is :'.($a-=$b).'<br>';
    echo'Result of a *= b is :'.($a*=$b).'<br>';
    echo'Result of a /= b is :'.($a/=$b).'<br><br>';
?>
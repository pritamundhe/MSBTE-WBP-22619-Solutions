<?php
    class Shape {
        const PI = 3.142;
        function __call($name, $arg) {
            if ($name == 'area') {
                switch (count($arg)) {
                    case 0: return 0;
                    case 1: return self::PI * $arg[0];
                    case 2: return $arg[0] * $arg[1];
                }
            }
        }
    }
    
    $circle = new Shape();
    echo "Area of Circle is: ".$circle->area(6)."<br>";
    
    $rectangle = new Shape();
    echo "Area of Rectangle is: ".$rectangle->area(12,7);
?>

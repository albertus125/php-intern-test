<?php
    // no 2
    $i = 0;
    while ($i < 3){
        echo $i . " ";
        $i++;
    }

    echo "<br>";

    

    // no 15
    $text = "Silakan hubungi kami di support@example.com atau
            sales@example.co.id untuk informasi lebih lanjut.";

    $pattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}/';

    preg_match_all($pattern, $text, $matches);
    var_dump($matches);
    
    echo "<br>";
    
    // essay no 1
    for($i = 1; $i <= 7; $i++){
        for($j = 1; $j <= 7; $j++){
                if(
                    ($i == 1 && ($j == 1 || $j == 7)) ||
                    ($i == 2 && ($j == 2 || $j == 6)) ||
                    ($i == 3 && ($j == 3 || $j == 5)) ||
                    ($i == 4 && ($j == 4)) ||
                    ($i == 5 && ($j == 3 || $j == 5)) ||
                    ($i == 6 && ($j == 2 || $j == 6)) ||
                    ($i == 7 && ($j == 1 || $j == 7)) 
                ){
                    echo "X";
                } else{
                    echo "O";
                }
        }
        echo "<br>";
    }
?>
<?php
    echo "<link rel='stylesheet' href='style.css'>";
    $f = fopen('test.txt', 'r') or die('Не удалось открыть файл');
    $htmlHeader = "<div class='person'>";
    $htmlFooter = "</div>";

    
    $block = "";
    while ( !feof($f) ) {
        $l = trim(fgets($f));
        if ($l == "#") {
            if($block != ""){ 
                echo $htmlHeader.$block.$htmlFooter."\n"; 
                $block = "";
            }
            $l1 = trim(fgets($f));
            $block = $block."<b>"."<i>".$l1."</i>"."</b>";
        }
        else {
            $block = $block.$l."\n"."</br>";
        }
    }
    if($block != ""){ 
        echo $htmlHeader.$block.$htmlFooter."\n"; 
        $block = "";
    }
    fclose($f);
?>

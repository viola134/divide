<?php
$a = rand(1, 40);
$b = "";
for($i = 1; $i <= $a; $i++){
    if($i == $a){
        $b = $b."{$i}";
        $i++;
        continue;
    }
    if($a % $i == 0){
        $b = $b."$i, ";
    }
}
print "$a = $b";
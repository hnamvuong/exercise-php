<?php
$b = [];
function mutateTheArray($n, $a) {
    for($i = 0; $i < $n; $i++) {
        $b[$i] = (($i - 1 <0) ? $a[$i - 1] = 0 : $a[$i-1]) 
                + $a[$i] 
                + (($i + 1 == $n) ? $a[$i + 1] = 0 : $a[$i+1]);
    }
    echo '$b = '.json_encode($b);
}
$a = [4, 0, 1, -2, 3];
mutateTheArray(5, $a);

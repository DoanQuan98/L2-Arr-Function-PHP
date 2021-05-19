<?php
$arr = [
    [4, 6, 8, 9, 3, 11],
    [8, 9, 7, 6, 4, 10]
];

$max = $arr[0][0];

for ($i = 0; $i < count($arr[$i]);$i++) {
    for ($j = 0; $j < count($arr[$j]); $j++) {
        if ($max < $arr[$i][$j]) {
            $max = $arr[$i][$j];
        }
    }
}
echo $max;
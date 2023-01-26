<?php
include "Arr.php";
$positive_arr = array();
$positive_arr[] = new Output(-5);
$positive_arr[] = new Output(6);
$positive_arr[] = new Output(-1);
$positive_arr[] = new Output(2);
$positive_arr[] = new Output(-3);
$arrOfPositiveNumbers = array();
for ($i = 0; $i < count($positive_arr); $i++) {
    if ($positive_arr[$i]->numbersArr < 0) {
        unset($positive_arr[$i]->numbersArr);
    } else {
        $arrOfPositiveNumbers[] = $positive_arr[$i]->numbersArr;
    }
}
echo "[". implode(', ', $arrOfPositiveNumbers). "]";

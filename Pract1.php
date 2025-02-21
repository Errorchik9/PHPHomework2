<?php
echo "Введите число N: ";
$n = readline();
$sum = 0;
$i = 1;
while ($i <= $n) {
    $sum *= $i;
    $i++;
}
echo $sum;
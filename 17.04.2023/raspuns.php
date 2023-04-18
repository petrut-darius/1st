<?php

ini_set('display_errors', 1);

function sumanumere($a, $b)
{
    return $a + $b;
}

if (isset($_POST['a'])) {
    $var1 = $_POST['a'];
} else {
    $var1 = 0;
}

if (isset($_POST['b'])) {
    $var2 = $_POST['b'];
} else {
    $var2 = 0;
}

echo sumanumere($var1, $var2);

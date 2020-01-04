<?php
$turu = TRUE;
$false = FALSE;

$a = $turu && $turu;
$b = $turu && $false;
$c = $turu && $turu && $turu;
$d = $turu && $false && $false;
$e = $turu && ($turu && $false);
var_dump($a, $b, $c, $d, $e);

<?php
/* Prototype  : array array_map  ( callback $callback  , array $arr1  [, array $...  ] )
 * Description: Applies the callback to the elements of the given arrays
 * Source code: ext/standard/array.c
 */

/*
 * Test array_map() with a pass-by-value callback forced to behave as a pass-by-reference function.
 */

$arr1 = array('original.0', 'original.1');
$arr2 = array('original.0', 'original.1');

function callback($a) {
   $a = "changed";
}

array_map('callback', $arr1);
var_dump($arr1);

$ref  =& $arr2[0];
array_map("callback", $arr2);
var_dump($arr2);

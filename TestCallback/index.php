<?php
const space = "<br>";

/*USING BUILT-IN FUNCTION*/
function myCallback($item) {
  return strlen($item);
}

$strings = ["chocolate", "milk", "banana", "coconut"];
$lengths = array_map("myCallback", $strings);
print_r($lengths);

echo space;

/*USING ANONYMOUS FUNCTION*/
$strings = ["......", "......", ".,.,,.,,,.", "........."];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);

echo space;

/*USING CALLBACK FROM A USER DEFINED FUNCTION */
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function dot($str) {
    return $str . ".";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str) . space;
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
printFormatted("Hello world", "dot");
?>
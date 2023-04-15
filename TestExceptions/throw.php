<?php
const br = '<br>';
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Cannot divide by zero :(");
  }
  return $dividend / $divisor;
}

$dividend = $_POST['dividend'];
$divisor = $_POST['divisor'];

echo divide($dividend, $divisor);
echo br . "<a href='index.php'>Go back</a>";

?>
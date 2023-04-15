<?php
const br = '<br>';

function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

$dividend = $_POST['dividend'];
$divisor = $_POST['divisor'];

try {
  echo divide($dividend, $divisor);
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo "Process complete.";
}
echo br . "<a href='index.php'>Go back</a>";
?>
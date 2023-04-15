<?php
const br = '<br>';

function submitHeight($height){
    if ($height <= 0) {
        throw new Exception("Height less than 1");
    }
    return "nice";
}

$height = $_POST['height'];
try {
  echo submitHeight($height);
} catch(Exception $e) {
  echo $e->getMessage();
} 
echo br . "<a href='index.php'>Go back</a>";
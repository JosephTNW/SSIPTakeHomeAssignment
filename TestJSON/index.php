<?php 
/*CREATING A JSON OBJECT*/

$jsonobj = '{
    "name": "Joseph",
    "status": "Alive",
    "hobby": "Coding",
    "occupation": "University Student",
    "thoughts": "Ooh Boy what a wonderful holiday!"
}';

const space = "<br>";

/*TESTING JSON_DECODE FUNCTION*/
//SIMPLE VAR_DUMP TEST
var_dump(json_decode($jsonobj));

echo space;

//RETURN AS AN ARRAY TEST
var_dump(json_decode($jsonobj, true));

echo space;

//ACCESSING EACH DATA TEST
$obj = json_decode($jsonobj);

//Singular access
echo $obj->name . space;

foreach ($obj as $key => $value) {
    echo $key . " : " . $value . space;
}

//ACCESSING EACH DATA (ARRAY)
$arr = json_decode($jsonobj, true);

//Singular Access
echo $arr["name"] . space;

foreach ($arr as $key => $value) {
    echo $key . " : " . $value . space;
}

/*TESTING JSON_ENCODE FUNCTION*/
$rating = array("Banana" =>9, "Grape" => 8, "Apple" => 7);
$classmates = array("Joseph", "Jaya", "Joey");

echo json_encode($rating);
echo json_encode($classmates);
 ?>
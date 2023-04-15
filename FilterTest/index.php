<?php
const space = '<br>';
/* FILTER VALIDATE STRING */
//String to be Sanitized:
$str = array('<h1>Hello World!</h1>', "test");

foreach ($str as $key => $value) {
    //Preview before sanitizing:
    echo $value . space;

    //Sanitization Process and Result:
    echo filter_var($value, FILTER_SANITIZE_STRING) . space;
}

echo space;

/* FILTER VALIDATE INTEGER */
$int = [0, 100, "1"];

foreach ($int as $value) {
    if (!filter_var($value, FILTER_VALIDATE_INT) === false) {
        echo "$value is a valid Integer" . space;
    } else {
        echo "$value is not a valid Integer" .  space;
    }
}

/*FILTER VALIDATE INTEGER FIX*/
foreach ($int as $value) {
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo "$value is a valid Integer" . space;
    } else {
        echo "$value is not a valid integer" . space;
    }
}

echo space;

/*FILTER VALIDATE IP*/
$ip = array("127.0.0.1", '1.2.3,4d');

foreach ($ip as $value) {
    if (!filter_var($value, FILTER_VALIDATE_IP) === false) {
        echo "$value is a valid IP address" . space;
    } else {
        echo "$value is not a valid IP address" . space;
    }
}

echo space;

/*FILTER VALIDATE AND SANITIZE EMAIL*/
$email = ["john.doe@example.com", "g tru@gmail.com"];

// Remove all illegal characters from email
foreach ($email as $value) {
    $value = filter_var($value, FILTER_SANITIZE_EMAIL);
    // Validate e-mail
    if (!filter_var($value, FILTER_VALIDATE_EMAIL) === false) {
        echo "$value is a valid email address" . space;
    } else {
        echo "$value is not a valid email address" . space;
    }
}

echo space;

/*FILTER VALIDATE AND SANITIZE URL*/
$url = ["https://www.w3schools.com", "manydots.co.id"];

// Remove all illegal characters from a url
foreach ($url as $value) {
    //Preview the original value
    echo $value . space;

    //Sanitize the value
    $value = filter_var($value, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($value, FILTER_VALIDATE_URL) === false) {
        echo "$value is a valid URL" . space;
    } else {
        echo "$value is not a valid URL" . space;
    }
}

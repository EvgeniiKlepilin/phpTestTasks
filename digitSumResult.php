<?php

function getDigitSum($number) {
    $sum = 0;
    for ($i = 0; $i < strlen($number); $i++) {
        $sum += $number[$i];
    }
    return $sum;
}

if (is_numeric($_GET["number"]) && !empty($_GET["number"])) {
    $num = $_GET["number"];
    $sum = getDigitSum($num);
    $message = "The sum of digits of number " . $num . " is:";
    //Old Way
    //echo "The sum of digits of number ".$num." is ".$sum. "!";
    //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
} else {
    $message = "You must enter a number!";
    $sum = "";
    //Old way
    //echo "<h3>You must enter a number!</h3>";
    //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}


$jsonArray = ["message" => $message, "digitSum" => $sum];
echo json_encode($jsonArray);
?>

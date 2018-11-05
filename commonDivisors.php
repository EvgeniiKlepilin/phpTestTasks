<?php

function getCommonDivisors($from, $to, $divisor) {
    $commonDivisors = array();
    for ($i = $from; $i <= $to; $i++) {
        if (fmod($i, $divisor) == 0) {
            array_push($commonDivisors, $i);
        }
    }
    return $commonDivisors;
}

if (is_numeric($_GET["from"]) && !empty($_GET["from"])) {
    if (is_numeric($_GET["to"]) && !empty($_GET["to"])) {
        if (is_numeric($_GET["divisor"]) && !empty($_GET["divisor"])) {
            $from = $_GET["from"]; //make it work when from is bigger than to
            $to = $_GET["to"];            
            $divisor = $_GET["divisor"];
            $commonDivisors = getCommonDivisors($from, $to, $divisor);
            
            $commonDivisorsString = implode(" ", $commonDivisors);
            $message = "The Common Divisors between " . $from . " and " . $to . " that are divided by " . $divisor . " are:";
            
            //echo "The Common Divisors between " . $from . " and " . $to . " that are divided by " . $divisor . " are: ";
            //for ($i = 0; $i < count($commonDivisors); $i++) {
            //    echo $commonDivisors[$i] . " ";
            //}
            //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
        } else {
            $commonDivisorsString = "";
            $message = "You must provide a divisor!";
            //echo "<h3>You must provide a divisor!</h3>";
            //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
        }
    } else {
        $commonDivisorsString = "";
        $message = "You must enter a number to go to!";
        //echo "<h3>You must enter a number to go to!</h3>";
        //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
    }
} else {
    $commonDivisorsString = "";
    $message = "You must enter a number to start from!";
    //echo "<h3>You must enter a number to start from!</h3>";
    //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}

$jsonArray = ["message" => $message, "commonDivisors" => $commonDivisorsString];
echo json_encode($jsonArray);
?>


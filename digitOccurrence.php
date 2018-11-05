
<?php

function getDigitOccurrence($number, $digit) {
    $occurrence = 0;
    for ($i = 0; $i < strlen($number); $i++) {
        if ($number[$i] == $digit) {
            $occurrence++;
        }
    }
    return $occurrence;
}

if (is_numeric($_GET["number"]) && !empty($_GET["number"])) {
    if (is_numeric($_GET["digit"]) && !empty($_GET["digit"])) {
        $num = $_GET["number"];
        $digit = $_GET["digit"];
        $occurrence = getDigitOccurrence($num, $digit);
        $occurrence = substr_count($num, $digit);
        $message = "The occurrence of digit " . $digit . " in number " . $num . " is:";
        //echo "The occurrence of digit " . $digit . " in number " . $num . " is " . $occurrence . "!";
        //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
    } else {
        $message = "You must enter a number!";
        $occurrence = "";
        //echo "<h3>You must enter a proper digit!</h3>";
        //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
    }
} else {
    echo "<h3>You must enter a number!</h3>";
    echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}

$jsonArray = ["message" => $message, "digitOccurrence" => $occurrence];
echo json_encode($jsonArray);
?>
   
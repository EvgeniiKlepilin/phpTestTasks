<?php

function timePassed($degrees) {
    return floor($degrees / 30);
}

if (is_numeric($_GET["degrees"]) && isset($_GET["degrees"])) {
    if ($_GET["degrees"] <= 360 && $_GET["degrees"] >= 0) {
        $degrees = $_GET["degrees"];
        $time = timePassed($degrees);
        $message = "The amount of hours passed based on " . $degrees . " degrees is at least:";
        //echo "The time passed based on " . $degrees . " is at least " . $time . "!";
        //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
    } else {
        $time = "";
        $message = "You must enter a number of degrees between 0 and 360!";
        //echo "<h3>You must enter a number of degrees between 0 and 360!</h3>";
        //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
    }
} else {
    $time = "";
    $message = "You must enter a number of degrees!";
    //echo "<h3>You must enter a number of degrees!</h3>";
    //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}

$jsonArray = ["message" => $message, "timePassed" => $time];
echo json_encode($jsonArray);
?>

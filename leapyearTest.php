
<?php

function isLeap($years) {
    return $years % 4 == 0;
}

if (is_numeric($_GET["years"]) && !empty($_GET["years"])) {
    if ($_GET["years"] <= 9999 && $_GET["years"] >= 1) {
        $years = $_GET["years"];
        $isLeap = isLeap($years);

        $yearType = $isLeap ? "Leap" : "Not Leap";
        $message = "The year " . $years . " is:";

        //echo "The year ".$years." is ".$yearType."!";
        //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
    } else {
        $yearType = "";
        $message = "You must enter a number of years between 1 and 9999!";
        //echo "<h3>You must enter a number of years between 1 and 9999!</h3>";
        //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
    }
} else {
    $yearType = "";
    $message = "You must enter a number of years!";
    //echo "<h3>You must enter a number of years!</h3>";
    //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}

$jsonArray = ["message" => $message, "isLeap" => $yearType];
echo json_encode($jsonArray);
?>

<?php

function getTrafficLightStatus($minutes) {
    $status = true;
    $green_count = 0;
    $red_count = 0;
    for ($i = 0; $i < $minutes; $i++) {
        if ($status) {
            $green_count++;
            if ($green_count == 3) {
                $status = !$status;
                $green_count = 0;
            }
        } else {
            $red_count++;
            if ($red_count == 2) {
                $status = !$status;
                $red_count = 0;
            }
        }
    }
    return $status;
}

if (is_numeric($_GET["minutes"]) && !empty($_GET["minutes"])) {
    $minutes = $_GET["minutes"];
    $trafficLightStatus = getTrafficLightStatus($minutes);
    
    $color = $trafficLightStatus ? "Green" : "Red";
    $message ="In ". $minutes . " minutes, the traffic light will be:";
    //echo "The Traffic Light will be " . $color . " after " . $minutes . " minutes!";
    //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
} else {
    $color = "";
    $message ="You must enter a number of minutes!";
    //echo "<h3>You must enter a number of minutes!</h3>";
    //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}

$jsonArray = ["message" => $message, "streetlightColor" => $color];
echo json_encode($jsonArray);
?>


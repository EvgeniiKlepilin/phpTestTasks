<?php

function createRandomValueArray($size) {
    $randomArray = array();
    for ($i = 0; $i < $size; $i++) {
        array_push($randomArray, rand());
    }
    return $randomArray;
}

if (is_numeric($_GET["size"]) && !empty($_GET["size"])) {
    $size = $_GET["size"];
    $array = createRandomValueArray($size);
    $maxValue = max($array);
    $minValue = min($array);
    $maxIndex = array_search($maxValue, $array);
    $minIndex = array_search($minValue, $array);
    
    $message = "Here is the Random Value Array with the size " . $size . ": <br>";
    $messageSwapped = "Here is the Random Value Array with the size " . $size . " with Max and Min Values Swapped: <br>";
    $randomArrayMax = "Max Value: " . $maxValue;
    $randomArrayMin = "Min Value: " . $minValue;
    
    $randomArray = implode(" ", $array);
    $temp = $array[$maxIndex];
    $array[$maxIndex] = $array[$minIndex];
    $array[$minIndex] = $temp;
    $randomArraySwapped = implode(" ", $array);
    

    //echo "Here is the Random Value Array with the size " . $size . ": <br>";
    //for ($i = 0; $i < count($array); $i++) {
    //    echo $array[$i] . " | ";
    //}
    //echo "<br>Max Value: " . $maxValue . "<br>";
    //echo "<br>Min Value: " . $minValue . "<hr>";
    
    //echo "Here is the Random Value Array with the size " . $size . " with Max and Min Values Swapped: <br>";
    //for ($i = 0; $i < count($array); $i++) {
    //    echo $array[$i] . " | ";
    //}
    //echo "<br>Max Value: " . $maxValue . "<br>";
    //echo "<br>Min Value: " . $minValue . "<hr>";
    //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
} else {
    $message = "You must enter a size of an array!";
    $messageSwapped = "";
    $randomArrayMax = "";
    $randomArrayMin = "";
    
    $randomArray = "";
    $randomArraySwapped = "";
    //echo "<h3>You must enter a size of an array!</h3>";
    //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}

$jsonArray = ["message" => $message, "messageSwapped" => $messageSwapped, 
    "randomArray" => $randomArray, "randomArraySwapped" => $randomArraySwapped, 
    "randomArrayMax" => $randomArrayMax, "randomArrayMin" => $randomArrayMin,];
echo json_encode($jsonArray);
?>


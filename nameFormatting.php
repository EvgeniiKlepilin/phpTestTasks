
<?php

function formatName($name) {
    return $fullname = explode(" ", $name);
}

//change to get russian letters

if (is_string($_GET["name"]) && !empty($_GET["name"])) {
    //count(preg_split('/\s+/', $_GET["name"])) == 3 regeX <--this one supports other langs
    //str_word_count($_GET["name"]) == 3
    if (count(preg_split('/\s+/', $_GET["name"])) == 3) {
        $name = $_GET["name"];
        $formattedName = formatName($name); //Apply mbstring
        
        $message = "Your Full Formatted Name is:";
        $formattedNameString = mb_strtoupper($formattedName[0], "UTF-8")
        . " " . mb_strtolower(mb_substr($formattedName[1], 0, 1)) . ". " .
                mb_strtolower(mb_substr($formattedName[2], 0, 1)) . ".";
        
        //echo "Your Full Formatted Name is " . strtoupper($formattedName[0])
        //. " " . strtolower($formattedName[1][0]) . ". " . strtolower($formattedName[2][0]) . ".";
        //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
    } else {
        $message = "You must enter a proper 3-Word full name!";
        $formattedNameString = "";
        
        //echo "<h3>You must enter a proper full name!</h3>";
        //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
    }
} else {
    $message = "You must enter a proper full name!";
    $formattedNameString = "";
    //echo "<h3>You must enter a proper full name!</h3>";
    //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}

$jsonArray = ["message" => $message, "formattedName" => $formattedNameString];
echo json_encode($jsonArray);
?>
  

<?php

function getCardName($value) {
    switch ($value) {
        case 2:
            return "Two";
            break;
        case 3:
            return "Three";
            break;
        case 4:
            return "Four";
            break;
        case 5:
            return "Five";
            break;
        case 6:
            return "Six";
            break;
        case 7:
            return "Seven";
            break;
        case 8:
            return "Eight";
            break;
        case 9:
            return "Nine";
            break;
        case 10:
            return "Ten";
            break;
        case 11:
            return "Jack";
            break;
        case 12:
            return "Queen";
            break;
        case 13:
            return "King";
            break;
        case 14:
            return "Ace";
            break;
        default :
            return null;
    }
}

if (is_numeric($_GET["value"]) && !empty($_GET["value"])) {
    $cardValue = $_GET["value"];
    $cardName = getCardName($cardValue);
    if (empty($cardName)) {
        $message = "There is no Card with a value of " . $cardValue . "!";
        //echo "There is no Card with a value of " . $cardValue . "!";
        //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
    } else {
        $message = "The Card Name with the value of " . $cardValue . " is:";
        //echo "The Card Name with the value of " . $cardValue . " is " . $cardName . "!";
        //echo "<h3><a href=\"index.php\">Go Back</a></h3>";
    }
} else {
    $message = "You must enter a proper number!";
    //echo "<h3>You must enter a proper number!</h3>";
    //echo "<h3><a href=\"index.php\">Try Again!</a></h3>";
}

$jsonArray = ["message" => $message, "cardName" => $cardName];
echo json_encode($jsonArray);
?>

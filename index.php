<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function getDigitSum(num) {
                if (num.length === 0) {
                    document.getElementById("digitSumMessage").innerHTML = "Please Provide a Number";
                    document.getElementById("digitSum").innerHTML = "";
                    return false;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("digitSumMessage").innerHTML = response["message"];
                            document.getElementById("digitSum").innerHTML = response["digitSum"];
                        }
                    };
                    xmlhttp.open("GET", "digitSumResult.php?number=" + num, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }

            function getDigitOccurrence(num, digit) {
                if (num.length === 0 || digit.length === 0) {
                    document.getElementById("digitOccurrenceMessage").innerHTML = "Please Provide a Proper Entry";
                    document.getElementById("digitOccurrence").innerHTML = "";
                    return false;
                } else if (digit.length > 1) {
                    document.getElementById("digitOccurrenceMessage").innerHTML = "Please Provide a Proper Digit";
                    document.getElementById("digitOccurrence").innerHTML = "";
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("digitOccurrenceMessage").innerHTML = response["message"];
                            document.getElementById("digitOccurrence").innerHTML = response["digitOccurrence"];
                        }
                    };
                    xmlhttp.open("GET", "digitOccurrence.php?number=" + num + "&digit=" + digit, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }

            function getCommonDivisors(from, to, divisor) {
                if (from.length === 0 || to.length === 0 || divisor === 0) {
                    document.getElementById("commonDivisorsMessage").innerHTML = "Please Provide a Proper Entry";
                    document.getElementById("commonDivisors").innerHTML = "";
                    return false;
                } else if (divisor === 0) {
                    document.getElementById("commonDivisorsMessage").innerHTML = "Can't Divide by Zero";
                    document.getElementById("commonDivisors").innerHTML = "";
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("commonDivisorsMessage").innerHTML = response["message"];
                            document.getElementById("commonDivisors").innerHTML = response["commonDivisors"];
                        }
                    };
                    xmlhttp.open("GET", "commonDivisors.php?from=" + from + "&to=" + to + "&divisor=" + divisor, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }

            function getRandomArray(size) {
                if (size.length <= 0) {
                    document.getElementById("randomArrayMessage").innerHTML = "Please Provide a Proper Array Size";
                    document.getElementById("randomArray").innerHTML = "";
                    document.getElementById("randomArrayMax").innerHTML = "";
                    document.getElementById("randomArrayMin").innerHTML = "";
                    return false;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("randomArrayMessage").innerHTML = response["message"];
                            document.getElementById("randomArraySwappedMessage").innerHTML = response["messageSwapped"];
                            document.getElementById("randomArray").innerHTML = response["randomArray"];
                            document.getElementById("randomArraySwapped").innerHTML = response["randomArraySwapped"];
                            document.getElementById("randomArrayMax").innerHTML = response["randomArrayMax"];
                            document.getElementById("randomArrayMin").innerHTML = response["randomArrayMin"];
                        }
                    };
                    xmlhttp.open("GET", "randomArray.php?size=" + size, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }

            function getFormattedName(name) {
                if (name.length === 0) {
                    document.getElementById("formattedNameMessage").innerHTML = "Please Enter Your Full Name";
                    document.getElementById("formattedName").innerHTML = "";
                    return false;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("formattedNameMessage").innerHTML = response["message"];
                            document.getElementById("formattedName").innerHTML = response["formattedName"];
                        }
                    };
                    xmlhttp.open("GET", "nameFormatting.php?name=" + name, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }

            function getTimePassed(degrees) {
                if (degrees.length === 0) {
                    document.getElementById("timePassedMessage").innerHTML = "Please Enter Degrees";
                    document.getElementById("timePassed").innerHTML = "";
                    return false;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("timePassedMessage").innerHTML = response["message"];
                            document.getElementById("timePassed").innerHTML = response["timePassed"];
                        }
                    };
                    xmlhttp.open("GET", "timePassed.php?degrees=" + degrees, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }

            function getStreetlightColor(minutes) {
                if (minutes.length === 0) {
                    document.getElementById("streetlightColorMessage").innerHTML = "Please Enter Minutes";
                    document.getElementById("streetlightColor").innerHTML = "";
                    return false;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("streetlightColorMessage").innerHTML = response["message"];
                            document.getElementById("streetlightColor").innerHTML = response["streetlightColor"];
                        }
                    };
                    xmlhttp.open("GET", "streetlightTest.php?minutes=" + minutes, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }

            function getLeapYear(years) {
                if (years.length === 0) {
                    document.getElementById("isLeapMessage").innerHTML = "Please Enter Years";
                    document.getElementById("isLeap").innerHTML = "";
                    return false;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("isLeapMessage").innerHTML = response["message"];
                            document.getElementById("isLeap").innerHTML = response["isLeap"];
                        }
                    };
                    xmlhttp.open("GET", "leapyearTest.php?years=" + years, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }

            function getCardName(value) {
                if (value.length === 0) {
                    document.getElementById("cardNameMessage").innerHTML = "Please Enter a Card Value!";
                    document.getElementById("cardName").innerHTML = "";
                    return false;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
                            document.getElementById("cardNameMessage").innerHTML = response["message"];
                            document.getElementById("cardName").innerHTML = response["cardName"];
                        }
                    };
                    xmlhttp.open("GET", "playingCards.php?value=" + value, true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>IROKEZ Internship Exercises</h1> 
                <p>Following is the list of all exercises necessary to finish. These
                    are complete and working examples made with PHP, JS, AJAX, HTML, and BootStrap.</p> 
            </div>
            <div class="btn-group btn-group-justified">
                <a href="#digitSumCalculatorHeader" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span></a>
                <a href="#digitOccurrenceHeader" class="btn btn-primary"><span class="glyphicon glyphicon-screenshot"></span></a>
                <a href="#commonDivisorsHeader" class="btn btn-primary"><span class="glyphicon glyphicon-filter"></span></a>
                <a href="#randomArrayHeader" class="btn btn-primary"><span class="glyphicon glyphicon-stats"></span></a>
                <a href="#nameFormattingHeader" class="btn btn-primary"><span class="glyphicon glyphicon-font"></span></a>
                <a href="#timePassedHeader" class="btn btn-primary"><span class="glyphicon glyphicon-time"></span></a>
                <a href="#streetlightColorHeader" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="#leapYearHeader" class="btn btn-primary"><span class="glyphicon glyphicon-calendar"></span></a>
                <a href="#playingCardsHeader" class="btn btn-primary"><span class="glyphicon glyphicon-credit-card"></span></a>
            </div>
            <div class="page-header">
                <h1>Assignment List <span class="glyphicon glyphicon-book"></span></h1>
            </div>
            <table>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well well-lg">
                            <h2 id="digitSumCalculatorHeader">Digit Sum Calculator <span class="glyphicon glyphicon-plus-sign"></span></h2>        
                            <form>
                                <div class="form-group">
                                    <label for="digitSumNumberEntry">Enter a number:</label>
                                    <input type="number" class="form-control" name="number" id="digitSumNumberEntry"><br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getDigitSum(document.getElementById('digitSumNumberEntry').value);
                                        return false;">
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="digitSumMessage"></h3>
                        <h2 id="digitSum"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well well-lg">
                            <h2 id="digitOccurrenceHeader">Digit Occurrence <span class="glyphicon glyphicon-screenshot"></span></h2>
                            <form>
                                <div class="form-group">
                                <label for="digitOccurrenceNumberEntry">Enter a number:</label>
                                <input type="number" name="number" class="form-control" id="digitOccurrenceNumberEntry"><br>
                                <label for="digitOccurrenceDigitEntry">Enter a digit to find:</label>
                                <input type="number" class="form-control" name="digit" id="digitOccurrenceDigitEntry"><br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getDigitOccurrence(document.getElementById('digitOccurrenceNumberEntry').value,
                                                document.getElementById('digitOccurrenceDigitEntry').value);
                                        return false;">
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="digitOccurrenceMessage"></h3>
                        <h2 id="digitOccurrence"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well well-lg">
                            <h2 id="commonDivisorsHeader">Common Divisors <span class="glyphicon glyphicon-filter"></span></h2>
                            <form>
                                <div class="form-group">
                                    <label for="commonDivisorsFromEntry">From:</label>
                                    <input type="number" name="from" class="form-control" id="commonDivisorsFromEntry"><br>
                                    <label for="commonDivisorsToEntry">To:</label>
                                    <input type="number" name="to" class="form-control" id="commonDivisorsToEntry"><br>
                                    <label for="commonDivisorsDivisorEntry">Divisor:</label> 
                                    <input type="number" name="divisor" class="form-control" id="commonDivisorsDivisorEntry"><br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getCommonDivisors(document.getElementById('commonDivisorsFromEntry').value,
                                                document.getElementById('commonDivisorsToEntry').value,
                                                document.getElementById('commonDivisorsDivisorEntry').value);
                                        return false;">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 id="commonDivisorsMessage"></h3>
                        <h2 id="commonDivisors"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well well-lg">
                            <h2 id="randomArrayHeader">Array with Random Values <span class="glyphicon glyphicon-stats"></span></h2>
                            <form>
                                <div class="form-group">
                                    <label for="randomArraySizeEntry">Array Size:</label>
                                    <input type="number" name="size" class="form-control" id="randomArraySizeEntry"><br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getRandomArray(document.getElementById('randomArraySizeEntry').value);
                                        return false;">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 id="randomArrayMessage"></h3>
                        <h2 id="randomArray"></h2>
                        <h2 id="randomArrayMax"></h2>
                        <h2 id="randomArrayMin"></h2>

                        <h3 id="randomArraySwappedMessage"></h3>
                        <h2 id="randomArraySwapped"></h2>
                        <h2 id="randomArrayMax"></h2>
                        <h2 id="randomArrayMin"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well well-lg">
                            <h2 id="nameFormattingHeader">Name Formatting <span class="glyphicon glyphicon-font"></span></h2>
                            <form>
                                <div class="form-group">
                                    <label for="formattedNameEntry">Full Name:</label>
                                    <input type="text" name="name" class="form-control" id="formattedNameEntry"><br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getFormattedName(document.getElementById('formattedNameEntry').value); return false;">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="formattedNameMessage"></h3>
                        <h2 id="formattedName"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well well-lg">
                            <h2 id="timePassedHeader">Time Passed on Clock <span class="glyphicon glyphicon-time"></span></h2>
                            <form>
                                <div class="form-group">
                                    <label for="timePassedDegreeEntry">Degrees:</label>
                                    <input type="number" name="degrees" class="form-control" id="timePassedDegreeEntry"><br>
                                    <label for="timePassedDegreeEntry">!Note: Degrees must be between 0 and 360!</label>
                                <br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getTimePassed(document.getElementById('timePassedDegreeEntry').value); return false;">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="timePassedMessage"></h3>
                        <h2 id="timePassed"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well well-lg">
                            <h2 id="streetlightColorHeader">Streetlight Color Test <span class="glyphicon glyphicon-eye-open"></span></h2>
                            <form>
                                <div class="form-group">
                                    <label for="streetlightColorMinutesEntry">Time Passed (in Minutes):</label>
                                    <input type="number" name="minutes" class="form-control" id="streetlightColorMinutesEntry"><br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getStreetlightColor(document.getElementById('streetlightColorMinutesEntry').value); return false;">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="streetlightColorMessage"></h3>
                        <h2 id="streetlightColor"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well well-lg">
                            <h2 id="leapYearHeader">Leap Year Test <span class="glyphicon glyphicon-calendar"></span></h2>
                            <form>
                                <div class="form-group">
                                    <label for="leapYearEntry">Year:</label> 
                                    <input type="number" name="years" class="form-control" id="leapYearEntry"><br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getLeapYear(document.getElementById('leapYearEntry').value); return false;">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="isLeapMessage"></h3>
                        <h2 id="isLeap"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well well-lg">
                            <h2 id="playingCardsHeader">Playing Cards <span class="glyphicon glyphicon-credit-card"></span></h2>
                            <form>
                                <div class="form-group">
                                Card Value: <input type="number" name="value" id="cardNameValueEntry"><br>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="getCardName(document.getElementById('cardNameValueEntry').value); return false;">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="cardNameMessage"></h3>
                        <h2 id="cardName"></h2>
                    </div>
                </div>
            </table>
        </div>
<?php
// put your code here
?>
    </body>
</html>

<?php
//JSON ffsdsdv 

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;


//pro práci s předanými parametry pro název parametru
$nazevParametruID = $_GET["p"];
switch ($nazevParametruID) {
    case "1":
        $nazevParametru = "Název analýzy";
        break;
    case "2":
        echo "i equals 1";
        break;
    case "3":
        echo "i equals 2";
        break;
    }

//pro práci s předanými parametry pro název tlačítka další
$nazevDalsiID = $_GET["d"];
switch ($nazevDalsiID) {
    case "1":
        $nazevDalsi = "Pokračovat";
        break;
    case "2":
        echo "i equals 1";
        break;
    case "3":
        echo "i equals 2";
        break;
    }

//pro práci s předanými parametry pro odkaz tlačítka další
$odkazDalsiID = $_GET["ud"];
switch ($odkazDalsiID) {
    case "1":
        $odkazDalsi = "define.php";
        break;
    case "2":
        echo "i equals 1";
        break;
    case "3":
        echo "i equals 2";
        break;
    }

//pro práci s předanými parametry pro odkaz tlačítka další
$odkazZpetID = $_GET["ub"];
switch ($odkazZpetID) {
    case "1":
        $odkazZpet = "index.php";
        break;
    case "2":
        echo "i equals 1";
        break;
    case "3":
        echo "i equals 2";
        break;
    }


?>
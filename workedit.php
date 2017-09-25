<?php
include "mysql.php";

$tbs = "saf01";
$typ = $_POST['typ'];
$faktor = $_POST['faktor'];

$value = $_POST['hodnota'];

if ($typ == "nazevfaktoru") {

$sql = "UPDATE rizika SET nazev_faktoru='$value' WHERE tbs='$tbs' AND factor='$faktor'";
         
    }
else {
    echo "Nebyly nalezeny žádné výsledky";
}
 


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
header("location: index.php?id=$tbs");
?>
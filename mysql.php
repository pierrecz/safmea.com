<?php
//mysql_connect("c199um.forpsi.com","f88211","T7knPNJ")or die("Nepovedlo se pАipojit na server");

$conn = new mysqli("c199um.forpsi.com","f88211","T7knPNJ","f88211");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//mysql_select_db("f88211") or die (" Nepovedlo se otevАнt databпzi");
?>
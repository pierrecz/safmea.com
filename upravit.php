<?php
include "mysql.php";

$uin ="saf01";
$ii = "nazevfaktoru";
$bb = $_GET["i"];
 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <link rel="stylesheet" type="text/css" href="css.css" media="all">
    <title>Výpočet SAFMEA metody</title>
  </head>
  <body>
    <H1 id=nadpis name="nadpis">Upravit hodnotu</H1>
    <div id=body> 

 <form action='workedit.php' method='post'>
 <input type="hidden" name="typ" value="<?php echo $ii; ?>" >
  <input type="hidden" name="faktor" value="<?php echo $bb; ?>" >
Nová hodnota
<input type="text" name="hodnota" /><br />
<input type='Submit' value='Odeslat' class=button>  
 
  
  </div>
  
  </body>
</html>

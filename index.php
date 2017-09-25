<?php
include "mysql.php";

$uin ="saf01";
$count = 1;

//Načtení dat k jednotlivým faktorům 
$sql = "SELECT * from rizika WHERE tbs='$uin' AND factor='$count'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $nazev_faktoru = $row["nazev_faktoru"];
        $ave_sev = $row["ave_sev"];
        $ave_lik = $row["ave_lik"];
        $ave_det = $row["ave_det"];
        $ave_men = $row["ave_men"];
        $mrpn = $row["mrpn"];                
    }
} else {
    echo "Nebyly nalezeny žádné výsledky";
}

$count = $count+1; 

$sql = "SELECT * from rizika WHERE tbs='$uin' AND factor='$count'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $nazev_faktoru2 = $row["nazev_faktoru"];
        $ave_sev2 = $row["ave_sev"];
        $ave_lik2 = $row["ave_lik"];
        $ave_det2 = $row["ave_det"];
        $ave_men2 = $row["ave_men"];
        $mrpn2 = $row["mrpn"];                
    }
} else {
    echo "Nebyly nalezeny žádné výsledky";
}

$count = $count+1; 

$sql = "SELECT * from rizika WHERE tbs='$uin' AND factor='$count'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $nazev_faktoru3 = $row["nazev_faktoru"];
        $ave_sev3 = $row["ave_sev"];
        $ave_lik3 = $row["ave_lik"];
        $ave_det3 = $row["ave_det"];
        $ave_men3 = $row["ave_men"];
        $mrpn3 = $row["mrpn"];                
    }
} else {
    echo "Nebyly nalezeny žádné výsledky";
}

//Načtení názvu vlastního faktoru 
$sql = "SELECT * from vlastni_faktor WHERE tbs='$uin'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $nazev_my = $row["nazev"];             
    }
} else {
    echo "Nebyly nalezeny žádné výsledky";
}
 
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
    <H1 id=nadpis name="nadpis">Výpočet rizik dle SAFMEA metody</H1>
    <div id=body> 

  <table width="960">
  <tbody>
    <tr>
      <th width="300" scope="col">Název rizikového faktoru</th>
      <th width="150" scope="col">Průměrná míra závažnosti (Sv)</th>
      <th width="150" scope="col">Průměrná míra očekávaného výskytu (Lk)</th>
      <th width="150" scope="col">Průměrná míra odhalitenosti (Dt)</th>
      <th width="150" scope="col"><?php echo $nazev_my; ?> <a href=index.php><img src="icona.png" width="15" alt=""/></a></th>
      <th width="150" scope="col">Míra rizika RPN</th>
      <th scope="col"></th>
    </tr>
    <tr>
      <td><?php echo $nazev_faktoru; ?></td>
      <td style="text-align: center"><?php echo $ave_sev; ?></td>
      <td style="text-align: center"><?php echo $ave_lik; ?></td>
      <td style="text-align: center"><?php echo $ave_det; ?></td>
      <td style="text-align: center"><?php echo $ave_men; ?></td>
      <td style="text-align: center"><strong><?php echo $mrpn; ?></strong></td>
      <td><a href=parametr.php?i=1><img src="icona.png" width="25" alt=""/></a></td>
    </tr>
    <tr>
      <td><?php echo $nazev_faktoru2; ?></td>
      <td style="text-align: center"><?php echo $ave_sev2; ?></td>
      <td style="text-align: center"><?php echo $ave_lik2; ?></td>
      <td style="text-align: center"><?php echo $ave_det2; ?></td>
      <td style="text-align: center"><?php echo $ave_men2; ?></td>
      <td style="text-align: center"><strong><?php echo $mrpn2; ?></strong></td>
      <td><a href=parametr.php?i=2><img src="icona.png" width="25" alt=""/></a></td>
    </tr>
    <tr>
      <td><?php echo $nazev_faktoru3; ?></td>
      <td style="text-align: center"><?php echo $ave_sev3; ?></td>
      <td style="text-align: center"><?php echo $ave_lik3; ?></td>
      <td style="text-align: center"><?php echo $ave_det3; ?></td>
      <td style="text-align: center"><?php echo $ave_men3; ?></td>
      <td style="text-align: center"><strong><?php echo $mrpn3; ?></strong></td>
      <td><a href=parametr.php?i=3><img src="icona.png" width="25" alt=""/></a></td>
    </tr>
    <tr>
    </tr>
   </tbody>
</table>
<br>
  <a href=index.php><img src="add.png" width="16" alt=""/> <b>Přidat další faktor</b> </a> 
  
  
  </div>
  
  </body>
</html>

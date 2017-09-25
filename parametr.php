<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <link rel="stylesheet" type="text/css" href="css.css" media="all">
    <title>Výpočet SAFMEA metody</title>
  </head>
  <body>
 <?php
include "mysql.php";
$ii = $_GET["i"];
//echo   $ii;
$tbs = "saf01";

//Načtení názvu faktoru
$sql = "SELECT * from rizika WHERE tbs='$tbs' AND factor='$ii'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $nazev_faktoru = $row["nazev_faktoru"];             
    }
} else {
    echo "Nebyly nalezeny žádné výsledky";
}
?>    


<H1 id=nadpis name="nadpis"><?php echo $nazev_faktoru; ?> <a href=upravit.php?i=<?php echo $ii; ?>><img src="icona.png" width="32" height="32" alt=""/></a></H1>
    <div id=body> 

 <form action='zpracovat.php' method='post'>
 <input type="hidden" name="factor" value="<?php echo $ii; ?>" >
  <table width="960" border="1">
  <tbody>
    <tr>
      <th width="300" scope="col">Respondent</th>
      <th width="150" scope="col">Průměrná míra závažnosti (Sv)</th>
      <th width="150" scope="col">Průměrná míra očekávaného výskytu (Lk)</th>
      <th width="150" scope="col">Průměrná míra odhalitenosti (Dt)</th>
      <th width="150" scope="col">Míra ovlivnitelnosti mentorem </th>

    </tr>
    <tr>
      <td>Respondent 1</td>
      <td style="text-align: center"> <select name=r1_severity>
  <option value="1">1 - Žádný dopad</option>
  <option value="2">2 - Velmi malý dopad</option>
  <option value="3">3 - Malý dopad</option>
  <option value="4">4 - Nevýrazný dopad</option>
  <option value="5">5 - Střední dopad</option>
  <option value="6">6 - Větší dopad</option>
  <option value="7">7 - Vážný dopad</option>
  <option value="8">8 - Výrazný dopad</option>  
  <option value="9">9 - Velmi zásadní dopad</option>
  <option value="10">10 - Existenční ohrožení</option>  
  </select> 

</td>
      <td style="text-align: center"><select name=r1_likehood >
  <option value="1">1 - Nikdy</option>
  <option value="2">2 - Téměř nikdy</option>
  <option value="3">3 - Velmi zřídka</option>
  <option value="4">4 - Zřídka</option>
  <option value="5">5 - Pravděpodobné</option>
  <option value="6">6 - Velmi pravděpodobné</option>
  <option value="7">7 - Často</option>
  <option value="8">8 - Velmi často</option>  
  <option value="9">9 - Téměř jistě</option>
  <option value="10">10 - Jistota</option>  
  </select> </td>
      <td style="text-align: center"><select name=r1_detection>
  <option value="1">1 - Vždy detekovatelné</option>
  <option value="2">2 - Velmi lehce detekovatelné</option>
  <option value="3">3 - Lehce detekovatelné</option>
  <option value="4">4 - Méně obtížně detekovatelné</option>
  <option value="5">5 - Středně obtížně detekovatelné</option>
  <option value="6">6 - Více obtížně detekovatelné</option>
  <option value="7">7 - Velmi obtížně detekovatelné</option>
  <option value="8">8 - Velmi vysoce obtížně detekovatelné</option>  
  <option value="9">9 - Téměř nemožné detekovat</option>
  <option value="10">10 - Nikdy nelze detekovat</option>  
  </select></td>
      <td style="text-align: center"><select name=r1_mentor>
  <option value="1">1 - Absolutní</option>
  <option value="2">2 - Velmi vysoká</option>
  <option value="3">3 - Vysoká</option>
  <option value="4">4 - Vyšší</option>
  <option value="5">5 - Střední</option>
  <option value="6">6 - Drobná</option>
  <option value="7">7 - Nízká</option>
  <option value="8">8 - Velmi nízká</option>  
  <option value="9">9 - Téměř nulová</option>
  <option value="10">10 - Nulová</option>  
  </select></td>

    </tr>
       <tr>
      <td>Respondent 2</td>
      <td style="text-align: center"> <select  name=r2_severity>
  <option value="1">1 - Žádný dopad</option>
  <option value="2">2 - Velmi malý dopad</option>
  <option value="3">3 - Malý dopad</option>
  <option value="4">4 - Nevýrazný dopad</option>
  <option value="5">5 - Střední dopad</option>
  <option value="6">6 - Větší dopad</option>
  <option value="7">7 - Vážný dopad</option>
  <option value="8">8 - Výrazný dopad</option>  
  <option value="9">9 - Velmi zásadní dopad</option>
  <option value="10">10 - Existenční ohrožení</option>  
  </select> 

</td>
      <td style="text-align: center"><select  name=r2_likehood>
  <option value="1">1 - Nikdy</option>
  <option value="2">2 - Téměř nikdy</option>
  <option value="3">3 - Velmi zřídka</option>
  <option value="4">4 - Zřídka</option>
  <option value="5">5 - Pravděpodobné</option>
  <option value="6">6 - Velmi pravděpodobné</option>
  <option value="7">7 - Často</option>
  <option value="8">8 - Velmi často</option>  
  <option value="9">9 - Téměř jistě</option>
  <option value="10">10 - Jistota</option>  
  </select> </td>
      <td style="text-align: center"><select  name=r2_detection>
  <option value="1">1 - Vždy detekovatelné</option>
  <option value="2">2 - Velmi lehce detekovatelné</option>
  <option value="3">3 - Lehce detekovatelné</option>
  <option value="4">4 - Méně obtížně detekovatelné</option>
  <option value="5">5 - Středně obtížně detekovatelné</option>
  <option value="6">6 - Více obtížně detekovatelné</option>
  <option value="7">7 - Velmi obtížně detekovatelné</option>
  <option value="8">8 - Velmi vysoce obtížně detekovatelné</option>  
  <option value="9">9 - Téměř nemožné detekovat</option>
  <option value="10">10 - Nikdy nelze detekovat</option>  
  </select></td>
      <td style="text-align: center"><select  name=r2_mentor>
  <option value="1">1 - Absolutní</option>
  <option value="2">2 - Velmi vysoká</option>
  <option value="3">3 - Vysoká</option>
  <option value="4">4 - Vyšší</option>
  <option value="5">5 - Střední</option>
  <option value="6">6 - Drobná</option>
  <option value="7">7 - Nízká</option>
  <option value="8">8 - Velmi nízká</option>  
  <option value="9">9 - Téměř nulová</option>
  <option value="10">10 - Nulová</option>  
  </select></td>

    </tr>
      <tr>
      <td>Respondent 3</td>
      <td style="text-align: center"> <select name=r3_severity>
  <option value="1">1 - Žádný dopad</option>
  <option value="2">2 - Velmi malý dopad</option>
  <option value="3">3 - Malý dopad</option>
  <option value="4">4 - Nevýrazný dopad</option>
  <option value="5">5 - Střední dopad</option>
  <option value="6">6 - Větší dopad</option>
  <option value="7">7 - Vážný dopad</option>
  <option value="8">8 - Výrazný dopad</option>  
  <option value="9">9 - Velmi zásadní dopad</option>
  <option value="10">10 - Existenční ohrožení</option>  
  </select> 

</td>
      <td style="text-align: center"><select  name=r3_likehood>
  <option value="1">1 - Nikdy</option>
  <option value="2">2 - Téměř nikdy</option>
  <option value="3">3 - Velmi zřídka</option>
  <option value="4">4 - Zřídka</option>
  <option value="5">5 - Pravděpodobné</option>
  <option value="6">6 - Velmi pravděpodobné</option>
  <option value="7">7 - Často</option>
  <option value="8">8 - Velmi často</option>  
  <option value="9">9 - Téměř jistě</option>
  <option value="10">10 - Jistota</option>  
  </select> </td>
      <td style="text-align: center"><select  name=r3_detection>
  <option value="1">1 - Vždy detekovatelné</option>
  <option value="2">2 - Velmi lehce detekovatelné</option>
  <option value="3">3 - Lehce detekovatelné</option>
  <option value="4">4 - Méně obtížně detekovatelné</option>
  <option value="5">5 - Středně obtížně detekovatelné</option>
  <option value="6">6 - Více obtížně detekovatelné</option>
  <option value="7">7 - Velmi obtížně detekovatelné</option>
  <option value="8">8 - Velmi vysoce obtížně detekovatelné</option>  
  <option value="9">9 - Téměř nemožné detekovat</option>
  <option value="10">10 - Nikdy nelze detekovat</option>  
  </select></td>
      <td style="text-align: center"><select  name=r3_mentor>
  <option value="1">1 - Absolutní</option>
  <option value="2">2 - Velmi vysoká</option>
  <option value="3">3 - Vysoká</option>
  <option value="4">4 - Vyšší</option>
  <option value="5">5 - Střední</option>
  <option value="6">6 - Drobná</option>
  <option value="7">7 - Nízká</option>
  <option value="8">8 - Velmi nízká</option>  
  <option value="9">9 - Téměř nulová</option>
  <option value="10">10 - Nulová</option>  
  </select></td>

    </tr>
   </tbody>
</table><br>
 <!-- <a href=parametr.php><img src="add.png" width="16" alt=""/> <b>Přidat dalšího respondenta</b> </a>  -->
<br>  <input type='Submit' value='Odeslat' class=button>
</form>


  
  
  </div>
  
  </body>
</html>

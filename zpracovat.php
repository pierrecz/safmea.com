<?php
include "mysql.php";

$tbs = "saf01";
$faktor = $_POST['factor'];

$r1_sev = $_POST['r1_severity'];
$r2_sev = $_POST['r2_severity'];
$r3_sev = $_POST['r3_severity'];
$r1_lik = $_POST['r1_likehood'];
$r2_lik = $_POST['r2_likehood'];
$r3_lik = $_POST['r3_likehood'];
$r1_det = $_POST['r1_detection'];
$r2_det = $_POST['r2_detection'];
$r3_det = $_POST['r3_detection'];
$r1_men = $_POST['r1_mentor'];
$r2_men = $_POST['r2_mentor'];
$r3_men = $_POST['r3_mentor'];

$av_sev = ($r1_sev+$r2_sev+$r3_sev)/3;
$av_sev = round($av_sev,2);
$av_lik = ($r1_lik+$r2_lik+$r3_lik)/3;
$av_lik = round($av_lik,2);
$av_det = ($r1_det+$r2_det+$r3_det)/3;
$av_det = round($av_det,2);
$av_men = ($r1_men+$r2_men+$r3_men)/3;
$av_men = round($av_men,2);

$r1_jk = $r1_sev * $r1_lik * $r1_det * $r1_men;
$r2_jk = $r2_sev * $r2_lik * $r2_det * $r2_men;
$r3_jk = $r3_sev * $r3_lik * $r3_det * $r3_men;

$mrpn = $r1_jk+$r2_jk+$r3_jk;
 
$sql = "UPDATE rizika SET ave_sev='$av_sev', ave_lik='$av_lik', ave_det='$av_det', ave_men='$av_men', mrpn='$mrpn' WHERE tbs='$tbs' AND factor='$faktor'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
header("location: index.php?id=$tbs");
?>
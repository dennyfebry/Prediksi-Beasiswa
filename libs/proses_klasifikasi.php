<?php
require_once '../naivebayes/vendor/autoload.php';
include '../libs/db_connection.php';

use Phpml\Classification\NaiveBayes;

// $periode_training = $_POST["training"];
$sql1 = "SELECT ipk,sks_lulus,penghasilan_orangtua,tanggungan FROM training ";
$result1 = $connect->query($sql1);
$sql2 = "SELECT status FROM training ";
$result2 = $connect->query($sql2);
$training = [];
$training_status = [];
if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $training[] = $row;
    }
}
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $training_status[] = $row["status"];
    }
}
$samples = [];
foreach ($training as $t) {
    array_push($samples, [$t["ipk"], $t["sks_lulus"], $t["penghasilan_orangtua"], $t["tanggungan"]]);
}

// $samples = [[3.5, 12, 3000000, 4], [2, 10, 400000, 6], [3, 20, 200000, 1]];
// $labels = ['lulus', 'tidak lulus', 'lulus'];

$classifier = new NaiveBayes();
// $classifier->train($samples, $labels);
$classifier->train($samples, $training_status);

// $periode_testing = $_POST["testing"];
$sql3 = "SELECT ipk,sks_lulus,penghasilan_orangtua,tanggungan FROM testing ";
$result3 = $connect->query($sql3);
$testing = [];
if ($result3->num_rows > 0) {
    while ($row = $result3->fetch_assoc()) {
        $testing[] = $row;
    }
}

$test = [];
foreach ($testing as $ta) {
    array_push($test, sprintf('%s', $classifier->predict([$ta["ipk"], $ta["sks_lulus"], $ta["penghasilan_orangtua"], $ta["tanggungan"]])));
}
$result = mysqli_query($connect, "SELECT COUNT(id) AS asd FROM testing");
$row = mysqli_fetch_array($result);
$total = $row[0];
// echo $total;
// print_r($test[0]);
// die();
$n = 1;
for ($i = 0; $i < $total; $i++) {
    $query = "INSERT INTO klasifikasi (npm, nama, jenis_kelamin, tgl_lahir, angkatan, fakultas, prodi, periode, ipk, sks_lulus, penghasilan_orangtua, tanggungan, actual, predict) VALUES ((SELECT npm FROM testing WHERE id='$n'),(SELECT nama FROM testing WHERE id='$n'),(SELECT jenis_kelamin FROM testing WHERE id='$n'),(SELECT tgl_lahir FROM testing WHERE id='$n'),(SELECT angkatan FROM testing WHERE id='$n'),(SELECT fakultas FROM testing WHERE id='$n'),(SELECT prodi FROM testing WHERE id='$n'),(SELECT periode FROM testing WHERE id='$n'),(SELECT ipk FROM testing WHERE id='$n'),(SELECT sks_lulus FROM testing WHERE id='$n'),(SELECT penghasilan_orangtua FROM testing WHERE id='$n'),(SELECT tanggungan FROM testing WHERE id='$n'),(SELECT status FROM testing WHERE id='$n'),'$test[$i]')";
    $result = mysqli_query($connect, $query);
    $n++;
}
header("location:../template.php?page=klasifikasi");

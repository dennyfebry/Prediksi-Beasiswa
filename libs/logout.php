<?php
include 'db_connection.php';

$query1 = "TRUNCATE TABLE training";
if ($connect->query($query1) === TRUE) {
    echo "Record Table Training Has Deleted";
} else {
    echo "Error: " . $query1 . "<br>" . $connect->error;
}
$result1 = mysqli_query($connect, "SELECT COUNT(id) AS tr FROM training");
$row1 = mysqli_fetch_array($result1);
$total_training = $row1[0];

for ($i = 1; $i <= $total_training; $i++) {
    $query = "UPDATE training SET tags=1 WHERE id='$i'";
    $result = mysqli_query($connect, $query);
}

$query2 = "TRUNCATE TABLE testing";
if ($connect->query($query2) === TRUE) {
    echo "\nRecord Table Testing Has Deleted";
} else {
    echo "Error: " . $query2 . "<br>" . $connect->error;
}

$result2 = mysqli_query($connect, "SELECT COUNT(id) AS ts FROM testing");
$row2 = mysqli_fetch_array($result2);
$total_testing = $row2[0];

for ($i = 1; $i <= $total_testing; $i++) {
    $query = "UPDATE testing SET tags=1 WHERE id='$i'";
    $result = mysqli_query($connect, $query);
}

$query3 = "TRUNCATE TABLE klasifikasi";
if ($connect->query($query3) === TRUE) {
    echo "\nRecord Table Klasifikasi Has Deleted";
} else {
    echo "Error: " . $query3 . "<br>" . $connect->error;
}
// die();
header("location:../index.php");

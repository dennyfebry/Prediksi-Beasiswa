<?php
session_start();
if (isset($_POST['username'])) {
    include "db_connection.php";
    if (empty($_GET['page'])) {
        $admin = mysqli_query($connect, "select * from user where username='$_POST[username]' and password='$_POST[password]'");
        if (mysqli_num_rows($admin) == 1) {
            $row = mysqli_fetch_array($admin);
            $_SESSION[user] = $row[username];
            $_SESSION[role] = "admin";
            header('location:../template.php?page=data_training');
        } else {

            echo "<script languange='JavaScript' type='text/javascript'>
	                	alert('Login Gagal, Username dan Passwoord tidak di kenal');
	                	</script>";
            ?>

            <script language=javascript>
                setTimeout("location.href='../index.php'", 500);
            </script>
        <?php


        }
    }
}

?>
<?php
include "libs/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php
        if ($_GET['page'] == 'dashboard') {
            echo "Dashboard";
        } elseif ($_GET['page'] == 'data_training') {
            echo "Data Training";
        } elseif ($_GET['page'] == 'data_testing') {
            echo "Data Testing";
        } elseif ($_GET['page'] == 'klasifikasi') {
            echo "Klasifikasi";
        }
        ?>
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Sidebar -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- Icon Sidebar -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Scroll Sidebar -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>
    <!-- Sidebar -->
    <?php include "libs/sidebar.php"; ?>
    <!-- End of Sidebar -->

    <!-- Header -->
    <?php include "libs/header.php"; ?>
    <!-- End of Header -->


    <!-- Content -->
    <?php
    if ($_GET['page'] == 'dashboard') {
        include "dashboard.php";
    } elseif ($_GET['page'] == 'data_training') {
        include "data_training.php";
    } elseif ($_GET['page'] == 'data_testing') {
        include "data_testing.php";
    } elseif ($_GET['page'] == 'klasifikasi') {
        include "klasifikasi.php";
    }
    ?>

    <!-- Footer -->
    <?php include "libs/footer.php"; ?>
    <!-- End of Footer -->

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <!-- Sidebar Menu -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- Sidebar Menu Scroll -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- Diagram -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>

    <script src="js/dropzone/dropzone.js"></script>

    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
</body>

</html>
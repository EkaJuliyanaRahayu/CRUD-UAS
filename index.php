<?php
require "includes/config.php";
require "includes/function.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kuliner</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>

    <div style="text-align: center;">
        <?php require "includes/navbar.php" ?>
        <hr>
    </div>
    <div align="center">
        <?php require "includes/konten.php" ?>
    </div>
    <footer style="margin-top: 3em; text-align: center;">
        <hr>
        Kuliner Indonesia <?= date("Y") ?>
    </footer>

    <script src="assets/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
    $('#makananTable').DataTable();
    </script>
 <script>
    $('#minumanTable').DataTable();
    </script>

</body>

</html>
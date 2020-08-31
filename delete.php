<?php
include "includes/database.php";
$id = $_REQUEST['id'];

mysqli_query($con,"DELETE FROM customers_tbl WHERE id_fld=$id");
header("location: index.php");
?>
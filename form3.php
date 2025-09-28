<?php
include "header.php";
include "dbconn.php";

if (isset($_POST['submit'])) {
    $address = $_POST['address'];
    $empid = $_POST['empid'];
    $travelinfo = $_POST['travelinfo'];
}

$query = mysqli_query($conn, "insert into `testtbl`() values()");

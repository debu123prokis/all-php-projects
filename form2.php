<?php
include "header.php";
include "dbconn.php";

if (isset($_POST['next'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
}
?>

<h1 class="text-center">Some more information</h1>
<hr>
<form id="form2" action="form3.php" method="POST">
    <label for="address">Address: </label>
    <input type="text" name="address" id="address" required /><br><br>
    <label for="empid">Employee ID: </label>
    <input type="text" name="empid" id="empid" required /><br><br>
    <label for="travelinfo">Willingness to travel: </label>
    Yes<input type="radio" name="travelinfo" id="travel_yes"> No<input type="radio" name="travelinfo"
        id="travel_no"><br><br>
    <input type="submit" name="submit" value="Submit" />
</form>

<?php include "footer.php"; ?>
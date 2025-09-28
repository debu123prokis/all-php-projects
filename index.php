<?php
include "header.php";
include "dbconn.php";
?>

<h1 class="text-center">A simple user signup form</h1>
<hr>
<form id="form1" action="form2.php" method="POST">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" required /><br><br>
    <label for="age">Age: </label>
    <input type="number" name="age" id="age" required /><br><br>
    <label for="gender">Gender: </label>
    <select name="gender" id="gender">
        <option value="male" selected>Male</option>
        <option value="female">Female</option>
    </select><br><br>
    <input type="submit" name="next" value="Next" />
</form>

<?php include "footer.php"; ?>
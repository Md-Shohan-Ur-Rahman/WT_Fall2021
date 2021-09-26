<?php include "control/results.php";?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration Form</h1>
<form action="" method="post">

First Name: <input type="text" name="fname"> <?php echo $validatename;?>
<?php echo $name;?>
<br>
<br>
Last Name: <input type="text" name="lname"> <?php echo $validatename;?>
<?php echo $name;?>
<br>
<br>
Age: <input type="int" age="age"> <?php echo $validateage;?>
<br>
<br>

Designation: <input type="checkbox" id="position1" name="position1" value="Junior">
Junior Programmer<br>
<input type="checkbox" id="position2" name="position2" value="Senior">
Senior Programmer<br>
<input type="checkbox" id="position3" name="position3" value="Lead">
Project Lead<br>
<br>
<?php echo $validatecheckbox; ?>
E-mail: <input type="text" name="email"> <?php echo $validateemail; ?>
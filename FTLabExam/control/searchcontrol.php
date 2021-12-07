<?php
include('../model/db.php');

$error="";
// store session data
if (isset($_POST['submit'])) {

$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Department=$_POST['Department'];

$(function () {
  $("[id$=mainContent_txtdateofbirth], [id$=mainContent_txtdoj], [id$=mainContent_txtdol]").datepicker({
      textboxImageOnly: true,
      textboxImage: 'images/calendar.png',
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd/mm/yyyy",
      yearRange: "-40:+0",
      maxDate: new Date(),
  });
});

$Salary=$_POST['Salary'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateName($conobj,"employee",$Name);

$userQuery=$connection->UpdateDepartment($conobj,"employee",$Department);

$userQuery=$connection->UpdateDate($conobj,"employee",$Date);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Salary</th></tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Salary"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No results";
  }

$connection->CloseCon($conobj);
}
?>
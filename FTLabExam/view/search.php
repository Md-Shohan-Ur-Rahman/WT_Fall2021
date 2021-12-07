<?php
    include('../control/searchcontrol.php');
?>
<html>
    <head>
        <title>FTLabExam</title>
    </head>
    <body>
        <h1>Search Employee</h1>
        <form action="" methhod="POST">
        <table>
            <tr>
                <td>Search by ID:</td>
                <td><input type="text" id="ID"></td>
            </tr>
            <tr>
                <td>Update by Name:</td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td>Update by Department:</td>
                <td><input type="text" department="Department"></td>
            </tr>

            <tr>
                    <td>Date of Birth:</td>
                    <td> <input type="date" id="birthday" name="dob"></td>
                </tr>
            
            <tr>


                <td>Update by Salary:</td>
                <td><input type="text" name="Salary"></td>
                <td><input type="text" name="Salary"></td>
            </tr>
        </table>
        <input name="submit" type="submit" value="Search">
        </form>
        <br>
        <?php echo $error; ?>
    </body>
</html>
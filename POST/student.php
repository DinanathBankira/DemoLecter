
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: 2px solid red;
    }
    th,td{
        border: 3px solid green;
        text-align: center;
    }
</style>
<body>
    <h1>Student Detials</h1>
    <table>
        <thead>
            <th>Name</th>
            <th>Roll No.</th>
        </thead>
        <tbody>
            <td>
                <?php 
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $Fullname=$fname." ".$lname; 
                echo $Fullname?></td>
            <td>
                <?php $rollno=$_POST['rolln'];
                echo $rollno;
                ?>
            </td>
        </tbody>
    </table>

</body>
</html>
<?php
session_start();
if(isset($_SESSION['uid']))
{
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STUDENT MANAGEMENT SYSTEM</title>
   <style>.admintitle{
    background-color: brown;
    color:#fff;
    margin-left:50px;
    margin-right:50px;
    height:140px;
    line-height:140px; 
    text-align:center;
}
.dashboard{
    width:50%;
    align:center;
}
</style>
</head>
<body>
    
<h4><a href="logout.php" style="float:right;margin-right:50px; color:green; font-size:20px;">Log Out<a></h4>
<div class="admintitle">
<h1> ADMIN DASHBOARD</h1>

</div>   

<div class="dashboard">
<div>
    <a href="addstdent.php">Insert Student Details</a>
</div>
<div>
<a href="updatestudent.php">Update Student Details</a>

</div>

<div>
<a href="deletestdent.php">Delete Student Details</a>
</div>


</div>

</body>
</html>
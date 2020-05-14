


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
<form method="post" action="addstdent.php">


<label>Roll No</label>
<input type="text" name="rollno" placeholder="Enter Rollno"><br>
<label>Full Name</label>
<input type="text" name="name" placeholder="Enter Full Name"><br>
<label>City</label>
<input type="text" name="city" placeholder="Enter City"><br>
<label>Contact No.</label>
<input type="text" name="pcon" placeholder="Enter the Contact No."><br>
<label>Class</label>
<input type="text" name="class" placeholder="Enter Class"><br>
<label>Image</label>
<input type="file" name="simg" ><br>

<input type="submit" name="submit" />
</form> 
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
    $rollno = $_POST['rollno'];   
    $name = $_POST['name'];
    $city = $_POST['city'];
    $contact = $_POST['pcon'];
    $class = $_POST['class'];
    echo "my roll no is ".$rollno;


    }
    ?>
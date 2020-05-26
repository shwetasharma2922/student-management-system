

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

#button {   
       background-color: #4CAF50;   
       width: 50%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
		 }  
		 
	 form {   
		 
		border: 3px solid #f1f1f1; 
		padding-left:30%;  
    	}   
		input[type=text], input[type=file] {   
        width: 50%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 3px solid green;   
        box-sizing: border-box;   
    }  
 #button:hover {   
        opacity: 0.7;   
	}   
	.container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
    label{
      
       color:  green;
    }
</style>
</head>
<body>
<h4><a href="admindash.php" style="float:left;margin-left:50px; color:green; font-size:20px;">Back<a></h4>
<h4><a href="logout.php" style="float:right;margin-right:50px; color:green; font-size:20px;">Log Out<a></h4>
<div class="admintitle">
<h1> ADMIN DASHBOARD</h1>

</div>   
<form method="post" action="addstdent.php" enctype="multipart/form-data">

<h2>
<label>Roll No</label><br>
<input type="text" name="rollno" placeholder="Enter Rollno" required="required" /><br>
<label>Full Name</label><br>
<input type="text" name="name" placeholder="Enter Full Name" required="required" /><br>
<label>City</label><br>
<input type="text" name="city" placeholder="Enter City" required="required" /><br>
<label>Contact No.</label><br>
<input type="text" name="pcon" placeholder="Enter the Contact No."  required="required" /><br>
<label>Class</label><br>
<input type="text" name="class" placeholder="Enter Class" required="required" /><br>
<label>Image</label><br>
<input type="file" name="simg" required="required" /><br>
</h2>
<input type="submit" name="submit" id="button"  />
</form> 
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include('../dbcon.php');

    $rollno = $_POST['rollno'];   
    $name = $_POST['name'];
    $city = $_POST['city'];
    $contact = $_POST['pcon'];
    $class = $_POST['class'];
    $imagename = $_FILES ['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];

    $img = move_uploaded_file($tempname,"../dataimg/$imagename");

    $qry="INSERT INTO `student1` ( `rollno`, `name`, `city`, `pcon`, `class`, `image`) VALUES ('$rollno', '$name', '$city', '$contact', '$class', '$imagename');";
    $run = mysqli_query($con,$qry);
        if($run == true)
        {
            ?>
            <script>
            alert ('Data Inserted Successfully');
            </script>
            <?php

        }
        else 
        {
            ?>
            
            <?php

        }

    }
    ?>
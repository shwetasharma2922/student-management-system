<?php
error_reporting(0);
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
<h4><a href="admindash.php" style="float:left;margin-left:50px; color:green; font-size:20px;">Back<a></h4>
<h4><a href="logout.php" style="float:right;margin-right:50px; color:green; font-size:20px;">Log Out<a></h4>
<div class="admintitle">
<h1> ADMIN DASHBOARD</h1>

</div>  
<div Style="align: 'center';"> 
<form method="post" action="upatestudent.php" enctype="multipart/form-data">
<label>Enter Class</label>
<input type="text" name="class" placeholder="Enter Class" required="required"/>
<label>Enter Name of Student</label>
<input type="text" name="stuname" placeholder="Enter Student Name" required="required"/>

<input type="submit" name="submit" value="Search" />

</form> 
<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr style="background-color:#000; color:#fff;">
<th>No</th>
<th>Image</th>
<th>Name</th>
<th>Rollno</th>
<th>Edit</th>
</tr>

<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');

$class = $_POST('class');
$name = $_POST('stuname');
$qry= "SELECT * FROM 'student1' WHERE 'class' = '$class' AND 'name' LIKE '%$name%'";
$run = mysqli_query($con,$qry);

if(mysqli_num_rows($run)<1)
{
echo "<tr><td colspan='5'>No Records Found</td></tr>";
}
else{
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    {
        $count++;
        ?>
        <tr>
        <td><?php echo $count; ?></td>
        <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"/></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['rollno']; ?></td>
        <td>Edit</td>
        </tr>
<?php
    }
}
}
?>

</table>
</div>  
    </body>
</html>

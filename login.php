<?php
session_start();
if(isset($_SESSION['uid']))
{
header('location:admin/admindash.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login</title>
    <style>
	button {   
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
		input[type=text], input[type=password] {   
        width: 50%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
	}   
	.container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
	</style>
</head>
<body>
<br><form method="POST" action="login.php" >
<h1>ADMIN LOGIN</h1>
	<div>

		<br><label style="size: 100px; padding:40"> Username: </label><br>
		<input type="text"  placeholder="Enter Username" name="uname" required><br><br><br>
		<label>Password: </label><br>
		<input type="password"  placeholder="Enter Password" name="pass" required><br><br><br>
		<button type="submit" name="login" value="login">Login</button>
	</div>
    </form>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $qry = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    
    if($row <1)
    {
        ?>
        <script>alert('Username or Password not match!!');
        window.open('login.php','_self');
</script>
<?php
    }
else{
    $data = mysqli_fetch_assoc($run);
    $id = $data['id'];

   
    $_SESSION['uid']=$id;
    header('location:admin/admindash.php');
}
}
?>
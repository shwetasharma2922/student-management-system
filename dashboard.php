<!DOCTYPE HTML>
<html>
<head>
	<title> Student Management System </title>
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

<body style="background: blue;">
<h3 align=right style="margin-right:20px;">
	<a href="login.php" align="right"> Admin Login </a></h3> 
	<h1 align="center" style="color: White"> STUDENT MANAGEMENT SYSTEM </h1>


	<br><form method="POST" >
	<div>

		<br><label style="size: 100px; padding:40"> Username: </label><br>
		<input type="text" align="center" placeholder="Enter Username" name="username" required><br><br><br>
		<label>Password: </label><br>
		<input type="password" align="center" placeholder="Enter Password" name="password" required><br><br><br>
		<button type="submit" >Login</button>
	</div>
	</form>
</body>
</html>
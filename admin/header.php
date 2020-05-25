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
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action=" " method="post" enctype="multipart/form-data">
<input type="file" name="upload" value=""/>
<input type="submit" name="submit" value="Upload file"/>

</form>


</body>
</html>
<?php


$filename = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["[tmp_name"];
$folder="../dataimg/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
?>
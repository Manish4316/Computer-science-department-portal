<?php

$link=mysqli_connect("localhost","root","","faculty");
?>
<html>
<head>
<style>
input[type=text]
{
    width:20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition:0.5s;
    transition: 0.5s;
    outline: none;
    font: bold;
}
input[type=text]:focus{
    border: 3px solid #555;
}

input[type=number]
{
    width:20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition:0.5s;
    transition: 0.5s;
    outline: none;
    font: bold;
}
input[type=number]:focus{
    border: 3px solid #555;
}

input[type=date]{
    width:20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition:0.5s;
    transition: 0.5s;
    outline: none;
    font: bold;
}
input[type=date]:focus{
    border: 3px solid #555;
}

input[type=radio]
{
    width:20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition:0.5s;
    transition: 0.5s;
    outline: none;
    font: bold;
}
input[type=radio]:focus{
    border: 3px solid #555;
}

input[type=email]
{
    width:20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition:0.5s;
    transition: 0.5s;
    outline: none;
    font: bold;
}
input[type=password]
{
    width:20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition:0.5s;
    transition: 0.5s;
    outline: none;
    font: bold;
}
input[type=email]:focus{
    border: 3px solid #555;
}
input[type=password]:focus{
    border:3px solid #555 ;
}
</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<fieldset>
<legend>Faculty Registration Details</legend>
<label for="fname">First Name:</label>
<input type="text" id="fname" name="firstname" placeholder="first name" /><br />
<label for="fname">Last Name:</label>
<input type="text" id="fname" name="lname" placeholder="last name" /><br />
password <input type="password" name="password" id="fname" placeholder="enter password"/><br />
<label for="fname">Gender:</label>
<input type="radio" name="gender" value="male" />male
<input type="radio" name="gender" value="female" />female
<input type="radio" name="gender" name="others" />others<br/>
<label for="fname">Year Of Joining:</label>
<input type="date" name="joinyear" /><br />
<label for="fname">Contact Number:</label>
<input type="text" name="number" placeholder="0987654387" /><br />
Degree:<input type="text" name="degree" placeholder="B-tech" /><br />
Department:<input type="text" name="department" placeholder="C.S.E" /><br />
E-mail:<input type="email" name="email" placeholder="xyz@gmail.com" /><br />
Upload photo:<input type="file" name="img" />
<input type="submit" value="login" name="submit" id="fname"/>
</fieldset>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
//$link=mysqli_connect("localhost","root","","faculty");

$firstname=$_POST['firstname'];
$lastname=$_POST['lname'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$year_of_joining=$_POST['joinyear'];
$contact=$_POST['number'];
$degree=$_POST['degree'];
$department=$_POST['department'];
$email=$_POST['email'];
$filename=$_FILES['img']['name'];
$mime=$_FILES['img']['type'];
$tmpname=$_FILES['img']['tmp_name'];
$filesize=$_FILES['img']['size'];
$fileerror=$_FILES['img']['error'];
    
    $timg=fopen($tmpname,"r");
    $bimg=fread($timg,$filesize);
    $img=addslashes($bimg);

$querry="insert into faculty values('$firstname','$lastname','$password','$gender','$year_of_joining',$contact,'$degree','$department','$email','$img','$mime')";
mysqli_query($link,$querry) or die (mysqli_error($link));
header("location:faculty_login.php");
}

?>
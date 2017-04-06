<?php
$link=mysqli_connect("localhost","root","","faculty");

?>
<head>
<style>
input[type=text]
{
 width:100%;
    height: 40%;
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
     width:100%;
    height: 40%;
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
 width:100%;
    height: 40%;
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
  width:100%;
    height: 40%;
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
    width:100%;
    height: 40%;
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
<html>
<body>
<form method="post">
<fieldset>
<legend>Student Registration Details.</legend>
<table>
<tr><td>Name:</td><td><input type="text" name="txt" placeholder="name" /></td></tr>
<tr><td>I.D:</td><td><input type="number" name="id" placeholder="12345" /></td></tr>
<tr><td>DateOfBirth:</td><td><input type="date" name="dob" placeholder="01-01-1990" /></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="gender" placeholder="male" />male<input type="radio" name="gender" placeholder="female" />female<input type="radio" name="gender" placeholder="others" />others</td></tr>
<tr><td>Address:</td><td><input type="text" name="address" placeholder="address" /></td></tr>
<tr><td>Mobile-Number:</td><td><input type="number" name="mobile" maxlength="10" placeholder="0987654321" /></td></tr>
<tr><td>Username:</td><td><input type="text" name="email" placeholder="xyz@gmail.com" /></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" /></td></tr>
<tr><td><input type="submit" name="sbt" value=">>" /></td></tr>
</table>
</fieldset>
</form>
</body>
</html>

<?php
if(isset($_POST['sbt']))
{
    $name=$_POST['txt'];
    $id=$_POST['id'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $username=$_POST['email'];
    $password=$_POST['password'];

    $query="insert into student values('$name',$id,'$dob','$gender','$address',$mobile,'$username','$password')";
    mysqli_query($link,$query) or die("database error".mysqli_error($link));
    header("location:student_login.php");
    
    
    
}
?>
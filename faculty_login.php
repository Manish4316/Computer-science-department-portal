<?php
$link=mysqli_connect("localhost","root","","faculty");

$flag=1;
?>
<html>
<head>
<style>

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}

</style>
</head>
<body>
<div>
  <form method="post" >
    <label for="username">Username</label>
    <input type="text" name="username"><br />

    <label for="password">Password</label>
    <input type="password" name="password">
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>
<div>
<h3>Not a member registration here.</h3>
<a href="faculty_registration.php">Sign up.</a>
</div>



</body>
</html>
<?php

if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$querry="select email,password from faculty where email='$username' and password='$password'";
$res=mysqli_query($link,$querry) or die (mysqli_error($link));

if($row=mysqli_fetch_array($res))
{

    header("location:facultydetails.php?password=$password");
    
   
}
else
{
    echo"<script>alert('invalid username or password')</script>";
}

}

?>
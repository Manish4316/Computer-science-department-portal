<?php
$link=mysqli_connect("localhost","root","","faculty");

$var=(int)$_GET['password'];

if(isset($_GET['password']))
{
    $query="select first_name,last_name,gender,year_of_joining,contact_number,degree,department,email,image from faculty where password=$var";
    $rs=mysqli_query($link,$query);
    $row=mysqli_fetch_row($rs) or die(mysqli_error($link));
    
}
?>
<html>
<head>
<style>

/*drop down button*/
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

/*end of drop down

start of layout*/

.outer{
    position: relative;
    border:2px solid red;
    width :100%;
    height:100%;
    
}
.inner1
{
    background-color: aqua;
    position: absolute;
    border: 2px solid green;
     width :100%;
    height:20%;
    
}
.inner2
{
    background-color:blueviolet;
    position: absolute;
    border: 2px solid black;
    top:20%;
     width :20%;
    height:80%;
    
}
table,td,tr
{
    border-collapse: collapse;
    border:1px solid navy;
    margin:auto;
    width: 1000px;
    height: 80px;
    font-family: sans-serif;
}
tr:nth-child(even)
{
    background-color:cyan;
}
.inner3
{
    position: absolute;
    border: 2px solid black;
    left:20%;
    top:20%;
     width :80%;
    height:80%;
    
}

/*end of layout*/
a{
    float: right;
}


/*button area*/
.button {
    background-color: red; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

/*button area end*/

img{
    float: right;
}
</style>

</head>
<body>

<div class="outer">

<div class="inner1">
<div>
<a href="faculty_login.php">
<img src="logout.png" width="40px" height="40px" />
</a>


<div class="dropdown">
  <img src="setting.png" width="30px" height="30px" />
  <div class="dropdown-content">
    <a href="#">edit profile</a>
    <a href="#"></a>
    <a href="#">Link 3</a>
  </div>
</div>


</div>

<a href="home.php">
 <button class="button button2">Home</button>
</a>

<div>
<a href="post.php">
<button class="button button2">Post</button>
</a>
<a href="posts.php">
<button class="button button2">See all posts</button>
</a>
</div>
</div>
<div class="inner2">

</div>
<div class="inner3">

<table>
<caption>details</caption>
<tr>
<td>fullname</td><td><input type="text" name="firstname" value="<?php

if(isset($row))
{
    echo $row[0].$row[1];
}
?>"/></td>
</tr>
<tr>
<td>year-of-joining</td><td><input type="text" name="doj" value="<?php

if(isset($row))
{
    echo $row[2];
}
?>"/></td></td>
</tr>
<tr>
<td>contact</td><td><input type="text" name="cotact" value="<?php

if(isset($row))
{
    echo $row[3];
}
?>"</td></td>
</tr>
<tr>
<td>gender</td><td><input type="text" name="gender" value="<?php

if(isset($row))
{
    echo $row[4];
}
?>"/></td></td>
</tr>
<tr>
<td>degree</td><td><input type="text" name="degree" value="<?php

if(isset($row))
{
    echo $row[5];
}
?>"/></td></td>
</tr>
<tr>
<td>department</td><td><input type="text" name="department" value="<?php

if(isset($row))
{
    echo $row[6];
}
?>"/></td></td>
</tr>
<tr>
<td>email</td><td><input type="text" name="email" value="<?php

if(isset($row))
{
    echo $row[7];
}
?>"/></td></td>
</tr>
<tr><td>Profile photo:</td><td><input type="file" name="file" value="<?php
if(isset($row))
{
    echo $row[8];
    }?>" /></td></tr>
</table>
</div>

</div>
</body>

</html>

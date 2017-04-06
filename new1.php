


<?php
$link=mysqli_connect("localhost","root","","faculty");
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<style>
.button {
    background-color: green; 
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

#header {
    background-color:white;
    color:brown;
    text-align:center;
    padding:5px;
}


#nav {
    background-color: antiquewhite;
    text-align: left;
    line-height:30px;
    height:450px;
    width:150px;
    float:left;
    padding:5px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #555;
    color: white;
}



#section {
    width:350px;
    float:left;
    padding:10px;	 	 
}


#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:40px;	 	 
}
</style>
</head>
<body>
<div id="header">
<h1>COMPUTER SCIENCE DEPARTMENT PORTAL</h1>
<img src="logo.jpg" style="float: left;" width="150px" height="150px" />
<img src="skyline.jpg" alt="skylineinstitue.com" style="float: center;" width="1300" height="150" />




<form method="post" action="new1.php">
Search your stuff:<input type="search" name="search" />
<input type="submit" name="sbt" />
</form>
<div>
<a href="home.php">
<button class="button button2">Home</button>
</a>
<a href="faculty_login.php">
<button class="button button2">Faculty</button>
</a>
<button class="button button2">Student</button>

<button class="button button2">Admin</button>

</div>

</div>
<div id="nav">
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
   <li><a href="Quote">Quote of the day</a></li>
</ul>
</div>

<div id="section">

<?php

if(isset($_POST['sbt']))
{
    $search=$_POST['search'];
    $query="select * from faculty where first_name like '%$search%'";
    //$query="select faculty.first_name,faculty.last_name,student.name,student.dob
    //from faculty join student";
    $res=mysqli_query($link,$query) or die("sql error".mysqli_error($link));
    $count=mysqli_num_rows($res);
    if($count==0)
    {
        echo "<h1>OOps! no result found</h1>";
    }
    else
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $first_name=$row['first_name'];
            $last_name=$row['last_name'];
            $gender=$row['gender'];
            $yoj=$row['year_of_joining'];
            $degree=$row['degree'];
            echo "<tr>First name=<td>$first_name&nbsp;</td><td>$last_name&nbsp;</td><td>$gender&nbsp;</td><td>$yoj&nbsp;</td><td>$degree</td><tr>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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




<form method="post" action="">
Search your stuff:<input type="search" name="search" />
<input type="submit" name="sbt" />
</form>
<div>
<button class="button button2">Home</button>
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
<form method="post" >
<fieldset>
<legend>Registration Details</legend>
<label for="fname">First Name:</label>
<input type="text" id="fname" name="firstname" value="first name" /><br />
<label for="fname">Last Name:</label>
<input type="text" id="fname" name="lname" value="last name" /><br />
password <input type="password" name="password" id="fname" placeholder="enter password"/><br />
<label for="fname">Gender:</label>
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" name="others">others<br/>
<label for="fname">Year Of Joining:</label>
<input type="date" name="joinyear" /><br />
<label for="fname">Contact Number:</label>
<input type="text" name="number" value="number" /><br />
Degree:<input type="text" name="degree" value="B-tech,B.E or etc" /><br />
Department:<input type="text" name="department" value="C.S.E" /><br />
E-mail:<input type="email" name="email" value="xyz@gmail.com" /><br />
Upload photo:<input type="file" name="img" />
<input type="submit" value="login" name="submit" id="fname"/>
</fieldset>
</form>

</div>
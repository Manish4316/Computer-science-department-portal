 <?php
$link=mysqli_connect("localhost","root","","faculty");
?>

<html>
<head>
my blog post.
</head>
<body>
<form method="post">
I.D:<input type="text" name="id" /><br />
Name:<input type="text" name="name" /><br />
Title:<input type="text" name="title" value="title" required="true" /><br />
Content:<textarea name="area" rows="10" cols="40" required="true"></textarea><br />
<input type="submit" name="sbt" value="submit" /><br />
</form>
</body>
</html>

<?php
if(isset($_POST['sbt']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $content=$_POST['area'];
    $title=$_POST['title'];
    $query="insert into posts values('$id','$name','$content','$title')";
    $rs=mysqli_query($link,$query) or die("database error".mysqli_error($link));
    if($content=="" ||$title=="")
    {
        echo("please complete your post!");
        return;
    }
    else
    {
        header("location:posts.php");
    }
}
?>
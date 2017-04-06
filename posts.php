<?php
$link=mysqli_connect("localhost","root","","faculty");
$query="select * from posts order by id desc";
$res=mysqli_query($link,$query) or die("database error".mysqli_error($link));
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_array($res))
    {
        echo "id=".$id=$row['id'];
        echo "name=".$name=$row['name'];
        echo "content=".$content=$row['content'];
        echo "title=".$title=$row['title'];
       // $admin="<div><a href='del_post.php?pid=$id'>Delete</a>&nbsp;<a href='edit_post.php?pid=$id'>Edit</a></div>";
        echo "<br />";
    }
}
?>
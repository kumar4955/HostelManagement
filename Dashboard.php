<?php
session_start();
if(!$_SESSION['admin']){
	header("location:Adminlogin.php");
}

?>

<!DOCTYPE html>

<html>
<head></head><title>Admin Panel</title>
<link rel="stylesheet" type="text/css"  href="sty.css">

<body>
<div class="side-menu">
<div class="Admin-name">
    <h1> Welcome,</h1>
</div>
<ul>
    <li> <img src="student1.png" alt="">&nbsp;<a href="display.php" >Students</a></li>
    <li><img src="bed3.jpg" alt="">&nbsp; <a href="manage.php">Room Manage</a></li>
    <li><img src="staff1.png" alt="">&nbsp;<a href="staff.php" >Staff Manage</a></li>
    <li><img src="admi12.png" alt="">&nbsp;<a href="admission.php" >Admission Students</a></li>
    <li><img src="f2.jpg" alt="">&nbsp; <a href="readfeedback.php">Feedback</a></li>
    <li><img src="blog1.jpg" alt="">&nbsp; <a href="create.php">Blog</a></li>
    <li><img src="lg.jpg" alt="">&nbsp; <a href="logout.php">LogOut</a></li>
</ul>




</div>
<style>


*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
body{

    min-height: 100vh;
   background-image:url("view.jpg") ;

}
a{
text-decoration: none;
}
h1{

    color:black;
    margin-top: 20px;
    margin-bottom: 30px;
    font-style: italic;
}
.side-menu{
position: fixed;
background:rgb(82, 160, 233);
width: 20vw;
min-height: 100vh;
display: flex;
flex-direction: column;

}
.side-menu.Admin-name{
    font-size: 24px;
    padding: 10px;
}
.side-menu li{
    font-size: 25px;
    padding: 10px 40px;
    color:black;
    display: flex;
}
.side-menu li:hover{
    background: white;
    color:blue;
}
</style>





</body>


</html>
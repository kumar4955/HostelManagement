<?php


?>


<!DOCTYPE html>
<html>

   <style>
body{
    margin:0;
    background: #f2f2f2; ;
   
background-size: 100%;

}
.Nav{
    width: 100%;
    background:black;
    height:80px;

}
.logo img{
    position:relative;
    margin-top: 15px;
    margin-left: 10px;
    float:right;
    padding: 5px;
    margin-top:3px ;
}
ul{
    list-style: none;
    padding:0;
    margin:0;
    position:absolute;

}
ul li{
    float:left;
    margin-top:15px;
}





ul li a{
    width:100px;
    color:white;
    display:block;
    text-decoration: none;
    font-size: 22px;
    text-align: center;
    padding: 15px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
}
a:hover{
    background-color: blue;

}
.Register{
    color:#f2f2f2;
background-color:rgba(0,0,0, 0.5);
margin:0;
padding: 0;
float: right;
margin-right: 50px;
padding-left: 50px;
margin-top: 30px;
margin-bottom: 10px;







}
.slider{
    width: 100%;
    height: 100vh;
    border-radius: 0%;
    background-image:url(c.jpeg);
    background-size: cover;
    margin: 0px auto;
    animation: slide 30s infinite;

}
@keyframes slide{
    25%{
        background-image: url(e.jpg);
    }
    50%{
        background-image: url(a.jpg);
    }
    100%{
        background-image: url(hostel.jpg);
    }

}

   </style>
<body>
   

    
    
    <div class="logo">
        <img src="sathi.jpg.jpeg"  width="75" height="65" >
    </div>

<div class="Nav">
    

    <ul>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="Home.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="students.html">Students</a></li>
        <li><a href="gallary.html">Gallery</a></li>
        <li><a href="Message.html">Message</a></li>
        <li><a href="Contact.html">Contact</a></li>
       
</ul>
</nav>
</body>
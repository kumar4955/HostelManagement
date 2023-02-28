<?php

$con= new mysqli('localhost','root','','hosteladmin');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    }
    
    $result=mysqli_query($con,"Select*from admin where  username='$username' AND password='$password'");
    session_start();
    if(mysqli_num_rows($result)){
        $_SESSION['admin']=$username;
        echo"
    <script>
    alert('login successfully');
    window.location.href='Dashboard.php';
    </script>
    ";
    }
    else{
    echo"
    <script>
    alert('invalid username or pass');
    window.location.href='Adminlogin.php';
     </script>
     ";
    }

?>
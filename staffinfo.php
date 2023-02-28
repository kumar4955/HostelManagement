<?php
include 'staffconnect.php';

if(isset($_POST['submit'])){
 $name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];

$sql= "INSERT INTO stafftable (name, email, address,phone,start_date, end_date) values('$name', '$email','$address','$phone','$start_date','$end_date')";
$result= mysqli_query($con,$sql);

if($result){
    header('location:staff.php');
exit();
   

}
else{
die(mysqli_error($con));
}
}


?>
<html>
<head></head>

<div class="main">
    <div class="add">
   
       
        <h1>Add The Students</h1>
        <form id="add"  method="post" method="staff.php"  >
        <link rel="stylesheet" type="text/css"  href="styll.css">

        
            <label>Name:</label><br>
            <input type ="text" name="name" required>
            <br>


            <label>Email:</label><br>
            <input type ="email" name="email" placeholder="Optional" >
             <br>

            <label>Address:</label><br>
            <input type ="text" name="address" required>
            <br>
                

            <label>Phone:</label><br>
            <input type ="number" name="phone" required>
           <br> <br>


           <label>Start Date:</label><br>
            <input type ="date" name="start_date" required>
           <br> <br>
           
           <label>End Date:</label><br>
            <input type ="date" name="end_date" >
           <br> <br>

           <button type="submit" name="submit"  >Submit</button>
            
         


        </form>
    </div>
</div>
</html>

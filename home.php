<?php
session_start();
if(!$_SESSION['user']){
	header("location:Adminlogin.php");
}

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
        <li><a href="Adminlogin.php">Admin</a></li>
        <li><a href="Home.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="students.html">Students</a></li>
        <li><a href="gallary.html">Gallery</a></li>
        <li><a href="Message.html">Message</a></li>
        <li><a href="Contact.html">Contact</a></li>
       
    </ul>
</div>
<div class="main">
    <div class="Register">
       
        <h1>Admission Form</h1>
        <form   method="post" action="register.php" >
            <label>Name:</label><br>
            <input type ="text" name="name" required>
            <br>

            <label>Age:</label><br>
            <input type="number"  name="age" placeholder="Optional" >
             <br>

            <label>Phone Number:</label><br>
            <input type ="text" name="phoneNumber" required>
            <br>
                

            <label>Pernament Address:</label><br>
            <input type ="text" name="PernamentAddress" required>
           <br> <br>

           <button type="submit">submit</button>
            



        </form>
    </div>
</div>


</div>


<div class="slider">

</div>
<div class="div1"><button><a href="booknow.html"><p8>BOOK NOW</p8></a></button></div>
<p>4 Seated Room</p>
<p1>Price RS.9500/per month only</p1>


<style> 
    .div1 {
      width: 450px;
      height: 250px;
      border: 1px solid rgb(0, 255, 42);
      border-radius: 10px;
      border-width: 10px;
      margin-top: 40px;
      margin-left: 40px;
      background-image: url(41.jpg);
    }
.div1 p8{
    margin-left: 0px;
}
    .div1 button{
        margin-left: 160px;
        margin-top: 220px;
        border-radius: 60px;
        size:20%;
        
        
    }
    p{
        margin-left: 20px;
        font-size: 20px;
        font-weight: bold;
    }
    p1{
        margin-left: 20px;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    </style>
    
    <div class="div2"><button><a href="booknow2.html">BOOK NOW</a></button></div>
<p3>3 Seated Room</p3>

<p4>Price RS.9999/per month only</p4>
<style> 
    .div2 {
      width: 450px;
      height: 250px;
      border: 1px solid rgb(0, 255, 42);
      border-radius: 10px;
      border-width: 10px;
      margin-top: 0px;
      margin-left: 950px;
      background-image: url(3rm.jpg);
    }
    .div2 button{
        margin-left: 120px;
        margin-top: 220px;
        border-radius: 20px;
        
        
    }
    p3{
        margin-left: 1100px;
        font-size: 20px;
        font-weight: bold;
    }
    p4{
        margin-left: 1100px;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    </style>
    <div class="div3"><button><a href="booknow3.html">BOOK NOW</a></button></div>
    <p>2 Seated Room</p>
    <p1>Price RS.10500/per month only</p1>






    <style> 
        .div3 {
          width: 450px;
          height: 250px;
          border: 1px solid rgb(0, 255, 42);
          border-radius: 10px;
          border-width: 10px;
          margin-top: 20px;
          margin-left: 20px;
          background-image: url(2.jpeg);
          background-color: aqua;
        }
        .div3 button{
            margin-left: 120px;
            margin-top: 220px;
            border-radius: 20px;
            
            
        }
        p{
            margin-left: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        p1{
            margin-left: 20px;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
    
        </style>


<div class="footer">
    <div class="col-1">
        <script src="https://kit.fontawesome.com/7e33e82502.js" crossorigin="anonymous"></script>
        <h7>USEFUL LINKS</h7><br><br>
        <a href="aboutus.html">About</a><br>
        <a href="Message.html">Message</a><br>
        <a href="Contact.html">Contact</a><br>
        <a href="blogindex.php">Blog</a>
    </div>
    <div class="col-2">
        
       
        <form action="feedback.php" method="POST">
             <label>FEEDBACK</label><br>
            <input type="text" placeholder=" " name="feedback" required><br>
            <button types="submit">SUBMIT</a></button>
           
        </form>
    </div>
    <div class="col-3">
        <h8>CONTACT</h8><br><br>
        <p6>Dillibazaar
            Radhe Marg 
            Nepal 98431<br>
        Kathmandu</p6>
        <section id="footer" class="py-5">
            <div class="container text-center">
              <a href="https://twitter.com/?lang=en" class="twitter"></a>
        
              <a href="https://www.facebook.com/SaathiKoGhar" class="facebook"></a>
              <a href="https://www.linkedin.com/" class="linkedin"></a>
            
            </div>
          </section>
    </div>
    <div class="col-4">
        <p7>DEVELOPER</p7><br>
        <img src="kum.jpg" height="120px" width="115px"><br>
        <p8>KUMAR BK</p8><br>
        <p7>Senior Developer</p7>
        
        </div>
</div>

<style>

.footer{
    margin-top: 100px;
    width: 70%;
    padding: 100px 15%;
    background: #333;
    color:#efefef;
    display: flex;
}
.footer div{
    text-align: center;
}
.col-2{
  flex-grow: 2;
}
.footer div h7{
    font-weight: 300;
    margin-bottom: 40px;
    margin-left: 0px;    letter-spacing: 1px;
}
.col-1 a{
    display: block;
    text-decoration: none;
    color:#efefef;
    margin-bottom: 4px;
    margin-top: 8px;
    font-size: 15px;
}
.footer form input{
    width: 300px;
    height: 35px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 40px;
    outline: none;
    border: none;

}
.footer form button{
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 15px;
    cursor: pointer;
}
.social-icons{
    margin-top: 30px;

}
.social-icons i{
    font-size: 20px;
    margin: 10px;
    cursor: pointer;
}
.col-4{
    margin-left: 100px;
}

</style>
<style>
    #footer .twitter {
      background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
      background-repeat: no-repeat;
      background-position: 0 0;
    }
    #footer .linkedin {
      background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
      background-repeat: no-repeat;
      background-position: -78px 0;
    }
    #footer .facebook {
      background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
      background-repeat: no-repeat;
      background-position: -233px 0;
    }
    #footer .skype {
      background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
      background-repeat: no-repeat;
      background-position: -156px 0;
    }
   
    #footer a {
      height: 56px;
      width: 56px;
      display: inline-block;
      margin: 10px;
    }
    #footer a:hover {
      transition: all 0.3s ease-out;
      -webkit-transition: all 0.3s ease-out;
    }
    #footer .twitter:hover {
      background-position: 0 -56px;
    }
    #footer .facebook:hover {
      background-position: -233px -56px;
    }
    #footer .skype:hover {
      background-position: -156px -56px;
    }
    #footer .linkedin:hover {
      background-position: -78px -56px;
    }
    #footer .flickr:hover {
      background-position: -310px -56px;
    }
    .bg-dark-1{
      background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
     
    }
     
    </style>



</body>
</html>
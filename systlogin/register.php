<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 </head>
<style> 
body,html {
background-color:#34515E;
font-family: 'Open Sans Condensed';
font-size: 18px;
}
.register-form{
font-size: 16px;
left: 48%;
top: 50%;
position: absolute;
-webkit-transform: translate3d(-50%, -50%, 0);
-moz-transform: translate3d(-50%, -50%, 0);
transform: translate3d(-50%, -50%, 0);
}
.register-form label{
color: aliceblue;
}
.register-form input{
margin-bottom: 5px;
width: 400px;
height: 40px;
}
.text-center{
    background-color:#34515E
}
.btn{
size:90px;
width: 360px;
height: 50px;
}
.position{
left: 42.5%;
top: 0px;
position: absolute;
}
h6{
    color:red;
}
}
</style>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<h1 class="position">Register</h1>
<section  class="register-form">
<form action="includes/register.inc.php" method="POST">
<label>Username:</label>
 <input type="text" class="form-control" name="Username" placeholder="Username">  
</br>
 <label>Password:</label> 
 <input type="password" class="form-control" name="Password" placeholder="Password"> 
</br> 
 <label>Confirm Password:</label>
 <input type="password" name="confirmpassword" placeholder="confirm Password" class="form-control" >
</br>
 <label> Age :</label> 
 <input type="date" class="form-control" name="Age" placeholder="Date"> 
</br> 
 <label>Email:</label>
 <input type="text" class="form-control" name="Email" placeholder="Email"> 
</br>
 <button class="btn btn-dark" type="submit" name="submit">Sign up</button> 
</form>
<?php 
 if(isset($_GET["error"])){
     if($_GET["error"]=="emptyInput"){ // ila khlina kolchi khawi o drna signup
         echo "<h6> Fill in all fields </h6>";
     }
     elseif($_GET["error"]=="Invalidusername"){
            echo "<h6>choose a proper Username ! </h6>";
        }
     elseif($_GET["error"]=="InvalidEmail"){
            echo "<h6> choose a proper Email ! </h6>";
        }
     elseif($_GET["error"]=="passwordcheck"){
            echo "<h6>Password doesn't match ! </h6>";
        }
     elseif($_GET["error"]=="stmtfailed"){
            echo "<h6>somethings is wrong,try again ! </h6>";
        }
     elseif($_GET["error"]=="usernametaken"){
            echo "<h6>Username already Exist ! </h6>";
        }
     elseif($_GET["error"]=="none"){
            echo "<h6> You have signed up ! </h6>";
        }
 } 
 ?>
</section>
</body> 
</html> 

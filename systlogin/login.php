<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
</head>
<style>
body,html {
background-color:aliceblue ;
font-size: 18px;
}
.login-container{
    width:350px;
    max-width:150%;
    margin:50px auto;
}
.login-container h1{
    text-align:center;
    font-size:50px;
}
.login-container input{
margin-bottom: 5px;
width: 400px;
height: 40px;
}
.login-container-login-form label {
    color: red ;
    size 30px;
}
.btn{
size:90px;
width: 360px;
height: 50px;
}
</style>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="login-container">
<h1 class="position">Log in</h1>
<section  class="login-form">
 <form action="includes/login.inc.php" methode="POST">
<label>Username:</label>
 <input type="text" class="form-control" placeholder="Username/Email">  
</br>
 <label>Password:</label> 
 <input type="password" class="form-control" placeholder="Password"> 
 </br>
 <button class="btn btn-dark"  type="submit" name="submit">LOGIN </button>
 </form>
</div>
<?php 
 if(isset($_GET["error"])){
    include_once'index.php' ;
     if($_GET["error"]=="emptyInput"){ // ila khlina kolchi khawi o drna signup
         echo "<p> Fill in all fields </p>";
     }
    else if($_GET["error"]=="wronglogin"){
            echo "<p>incorrect information! Try Again. </p>";
    }
    } 
 ?>
 </section> 
</body>
</html>
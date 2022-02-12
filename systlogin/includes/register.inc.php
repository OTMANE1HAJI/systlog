<?php 
if(isset($_POST["submit"])){ // ila cliqua 3la submit aydwzu lpage lakhra ze3ma rah tssejel

  $username=$_POST["Username"]; //kanakhduhum btertib dyal form f register.php
  $Password=$_POST["Password"];
  $confirmpwd=$_POST["confirmpassword"];
  $age=$_POST["Age"];
  $Email=$_POST["Email"];


  require_once 'db.inc.php'; //check and show data 
  require_once 'functions.inc.php'; //andiro fihoum les erreurs bhal ila khla les cases khawyin 
  if(emptyregister($username,$Password,$confirmpwd,$age,$Email)!==FALSE){ // had fonction katchecki wach lfaraghat khawyin
  header("location:../register.php?error=emptyInput");
    exit();
  }
  if(Invalidusername($username)!==FALSE){ // wach username salh ola la
  header("location:../register.php?error=invalidusername");
    exit();
}
if(InvalidEmail($Email)!==FALSE){  //wach email salh ola la
  header("location:../register.php?error=invalidEmail");
    exit();
}
if(passwordcheck($Password,$confirmpwd)!==FALSE){ //wach password mktub mzn
  header("location:../register.php?error=invalidpassword");
    exit();
}
 if(UIdExists($conn,$username,$Email)!==FALSE){ //wach username o email deja kayn f data base
  header("location:../register.php?error=usernametaken");
    exit();
} 
creatuser($conn,$username,$Password,$age,$Email);
}
 else{ //ila maklikach 3la submit atrej3u lpage dyal tssjil (signup) 
  header("location:../register.php");
}
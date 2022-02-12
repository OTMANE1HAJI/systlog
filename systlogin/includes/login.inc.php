
<?php 
if(isset($_POST['submit'])){
    $username=$_POST["Username"]; //kanakhduhum btertib dyal form f login.php
    $Password=$_POST["Password"];
  require_once 'db.inc.php';
  require_once 'functions.inc.php' ;
  if(emptylogin($username,$Password)!==true){ // had fonction katchecki wach lfaraghat khawyin
    header("location:../login.php?error=emptyInput");
      exit();
    }
    loginUsers($conn,$username,$Password);
  }

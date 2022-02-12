<?php 
function emptyregister($username,$Password,$confirmpwd,$age,$Email){
    $result ;
    if(empty($username) || empty($Password) || empty($confirmpwd) || empty($age) || empty($Email)){
        $result=true ;
    }
    else{
        $result=false;
    }
    return $result ;
} 
function Invalidusername($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/" , $username)){ //ila kan username mafihch had les caracteres
        $result=true;
    }
    else{
        $result=false;
    }
    return $result ;
}
function InvalidEmail($Email){
    $result ;
    if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
        $result=true ;
    }
    else{
        $result=false;
    }
    return $result ;
} 
function passwordcheck($Password,$confirmpwd){
    $result;
    if($Password !==  $confirmpwd){
        $result=true ;
    }
    else{
        $result=false ;
    }
    return $result ;
} 
function UIdExists($conn,$username,$Email){ // had les fcs kaydkhlo l databases o kaychufu wach username o email deja kaynin ola la 
    $sql="SELECT*FROM users WHERE Username=?  or Email=?;"; //; lwla dyal sql o tanya dyal code php //knchekiw soit username soit email
    $stmt=mysqli_stmt_init($conn);  //kan initalisiw l connection
   if(!mysqli_stmt_prepare($stmt,$sql)){ // kanchufu wach sql ghadi ykhdem f database mataln ila ktebna userss blast users ay3tik stmtfailed
        header("location:../register.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$Email);  // s kat3ni strind ; ay data dkhla users kaduz f username o email
    mysqli_stmt_execute($stmt); 
    $resultdata=mysqli_stmt_get_result($stmt); 
    if($row=mysqli_fetch_assoc($resultdata)){ //ila kant data f databases dyal username li dkhlna 
    return $row ;
    }
else {
    $result=FALSE;
    return $result ;
} 
mysqli_stmt_close($stmt);
} 
function creatuser($conn,$username,$Password,$age,$Email){ // had les fcs kaydkhlo l databases o kaychufu wach username o email deja kaynin ola la 
    $sql="INSERT INTO users(Username,Password,Age,Email)VALUES(?, ?, ?, ?)"; 
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../register.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt,"ssss",$username,$Password,$age,$Email); //"ssss" kate3ni 3ndna 4 parametres (username o email o password o age)
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../register.php?error=none");
    exit();
}  
function emptylogin($username,$Password){
    $result ;
    if(empty($username) || empty($Password)){
        $result=true ;
    }
    else{
        $result=false;
    }
    return $result ;
} 
 function loginUsers($conn,$username,$Password){
    $UIdExists=UIdExists($conn,$username,$username); // ila dkhel chi username ola email kayn f database
    if($UIdExists===false){
    header("location:../login.php?error=wronglogin");
    exit();
}
if($checkPwd===false){
    header("location:../login.php?error=wronglogin");
    exit();
  } 
elseif($checkPwd===true){
    session_start();
    $_SESSION["$ID"]=$UIdExists["$ID"];
    $_SESSION["$Username"]=$UIdExists["$Username"];
    header("location:../index.php");
    exit();
}

}





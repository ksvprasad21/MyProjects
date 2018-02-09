<?php

include 'includes/common.php';

if(!isset($_SESSION['email'])) {
    header('location: index.php?please login');
}
else
{
    $oldpass = mysqli_real_escape_string($connect,$_POST['oldpassword']);
    $newpass= mysqli_real_escape_string($connect,$_POST['newpassword']);
    $modpass= mysqli_real_escape_string($connect,$_POST['modpassword']);
    $oldpass= md5($oldpass);
   
    $query="select * from users where userpassword='$oldpass1'";
    $query_result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($query_result);
    $userid=$_SESSION['id'];
    
    if($num > 0){
        
        $newpass = mysqli_real_escape_string($newpass);
        $modpass = mysqli_real_escape_string($modpass);
        $enpass= md5($modpass);
        
        if ($newpass == $modpass){
            
            $query= "update users set userpassword='$enpass' where userid='$userid'";
            $query_result = mysqli_query($connect, $query) or die(mysqli_errno($connect));
            header('location: products.php');
            
        }
    }
 else {
      //header('location: settings.php?invalid_password'); 
    }
    
}
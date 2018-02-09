<?php require 'includes/common.php'; ?>
<?php

$email = mysqli_real_escape_string($connect,$_POST['email']);
$password = mysqli_real_escape_string($connect,$_POST['password']);

$encr_pass = md5($password);

$query = "select userid from users where userpassword='$encr_pass' AND useremail='$email'";

$query_result = mysqli_query($connect, $query);

$length = mysqli_num_rows($query_result);

if ($length <= 0)
{
    header('location: login.php?please_enter_correctly');
}

 else {
     $row=mysqli_fetch_array($query_result);

     $_SESSION['email']=$email;
     $_SESSION['id'] =$row['userid'];
     
     header('location: products.php?logged_in_successfully');
    
}

?>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


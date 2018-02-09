<?php require 'includes/common.php'; ?>
<?php

$email = mysqli_real_escape_string($connect,$_POST['email']);
$password = mysqli_real_escape_string($connect,$_POST['password']);

$password1 = md5($password);


$query = "select * from users where useremail='$email' AND userpassword='$password1'";

$query_result = mysqli_query($connect, $query);

$length = mysqli_num_rows($query_result);

if ($length <= 0)
{
    //echo $email,$password;
    header('location: login.php?please_enter_correctly');
    
}

 else {
     $row=mysqli_fetch_array($query_result);

     $_SESSION['useremail']=$email;
     
     header('location: student_in.php?logged_in_successfully');
    
}

?>


<?php require 'includes/common.php'; ?>
<?php

$email = mysqli_real_escape_string($connect,$_POST['email']);
$password = mysqli_real_escape_string($connect,$_POST['password']);

$password1=md5($password);


$query = "select * from admin where adminemail='$email' AND adminpassword='$password1'";

$query_result = mysqli_query($connect, $query);

$length = mysqli_num_rows($query_result);

if ($length <= 0)
{
    echo $email,$password;
    //header('location: admin.php?please_enter_correctly');
    
}

 else {
     $row=mysqli_fetch_array($query_result);
     
     if($row['adminemail']==$email and $row['adminpassword']==$password1){

     $_SESSION['adminemail']=$email;
     echo $email,$password1;
     
     header('location: admin_in?logged_in_successfully');
     }
     else
     {
         header('location: admin.php?please_enter_correctly');
         echo $email,$password;
     }
    
}

?>


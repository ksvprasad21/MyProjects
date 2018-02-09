
        <?php
        require 'includes/common.php';
        
        //after remaining, write php validations
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repass = $_POST['repass'];
        
        //echo $name,$email,$password,$repass;
        $query = "select * from users where useremail='$email'";
        
       
        $query_result= mysqli_query($connect,$query);
        
        
        $query_val= mysqli_num_rows($query_result);
        
        
        
        if ($query_val > 0) {
            
            
            header('location: signup.php?email_error=given_email_already_exists');
            
        }
        
        else {
        $name = mysqli_real_escape_string($connect,$name);
        $email = mysqli_real_escape_string($connect,$email);
        $password = mysqli_real_escape_string($connect,$password);
        $repass = mysqli_real_escape_string($connect,$repass);
        
        if($password != $repass)
            header('location: signup.php?password_error');
        
        $encrypted_pass= md5($password);
        /*
        echo $name,$email,$password,$contact,$city,$address;
        
        echo $encrypted_pass."<br>";*/
        
        $query_insert = "insert into users(username,useremail,userpassword) values ('$name','$email','$encrypted_pass')";
       
        $query_insert_result = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
        
        $_SESSION['useremail']= $email;
       
        
        header('location: student_in.php?signed_in_successfully');
        
        
        /* $query = "select * from users where useremail='$email'";
        $query_result= mysqli_query($connect,$query);
        $query_val= mysqli_num_rows($query_result);
        */
     
 }
 
        ?>
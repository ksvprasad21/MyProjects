
        <?php
        require 'includes/common.php';
        
        //after remaining, write php validations
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        echo $name,$email,$password,$contact,$city,$address;
        $query = "select * from users where useremail='$email'";
        $query2 = "select * from users where usercontact='$contact'";
       
        $query_result= mysqli_query($connect,$query);
        $query_result2= mysqli_query($connect,$query2);
        
        $query_val= mysqli_num_rows($query_result);
        $query_val2= mysqli_num_rows($query_result2);
        
        
        if ($query_val > 0) {
            
            
            header('location: signup.php?email_error=given_email_already_exists');
            
        }
        else if($query_val2 > 0)
        {
            header('location: signup.php?email_error=given_contactnumber_already_exists');
        }
 else {
        $name = mysqli_real_escape_string($connect,$name);
        $email = mysqli_real_escape_string($connect,$email);
        $password = mysqli_real_escape_string($connect,$password);
        $contact = mysqli_real_escape_string($connect,$contact);
        $city = mysqli_real_escape_string($connect,$city);
        $address = mysqli_real_escape_string($connect,$address);
        
        $encrypted_pass= md5($password);
        /*
        echo $name,$email,$password,$contact,$city,$address;
        
        echo $encrypted_pass."<br>";*/
        
        $query_insert = "insert into users(username,useremail,userpassword,usercontact,usercity,useraddress) values ('$name','$email','$encrypted_pass','$contact','$city','$address')";
       
        $query_insert_result = mysqli_query($connect, $query_insert) or die(mysqli_error($connect));
        
        $_SESSION['email']= $email;
        
        
        $_SESSION['id'] = mysqli_insert_id($connect);
        
       
        
        header('location: products.php?signed_in_successfully');
        
        
        /* $query = "select * from users where useremail='$email'";
        $query_result= mysqli_query($connect,$query);
        $query_val= mysqli_num_rows($query_result);
    */
     
 }
 
        ?>
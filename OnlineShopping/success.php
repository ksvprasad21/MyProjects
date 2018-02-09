<?php include 'includes/common.php';  ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>success</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootcss.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .add_margin{
                margin-top:100px;
                margin-bottom: 30%;
            }
            .jumbotron{
                
            }
        </style>
    </head>
    <body>
       
        <?php 
        
        if(!isset($_SESSION['email'])) {
            header('location: index.php?please login');
        }
 else {
     $userid=$_SESSION['id'];
     
     $query = "update useritems set status='Confirmed' where  userid='$userid' ;";
     $query_result = mysqli_query($connect, $query) or die(mysqli_error($connect));
     
      }
        
       ?>
        <div class="container add_margin">
                <div class="jumbotron">
                    <h3 align="center">Your Order Is Confirmed.Thank You For Shopping With Us</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item</p>
                </div>
        </div>
          ?>
    </body>
</html>

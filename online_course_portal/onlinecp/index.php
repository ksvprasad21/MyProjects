<?php
require 'includes/common.php';

if (isset($_SESSION['useremail']))
    {  
    header('location: student_in.php');
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="onlinecp.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .add_margin{
                margin-top: 20px;
            }
        </style>  
    </head>
    <body>
       <?php        include 'includes/header.php';  ?>
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <h1>Welcome To Online Courses</h1>
                    <p>Learn At Any Time</p>
                </div>
            </div>
        </div>
    </body>
</html>

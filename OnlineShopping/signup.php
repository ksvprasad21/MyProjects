<?php require 'includes/common.php'; ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Signup</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootcss.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .mark_margin{
        margin-top: 5%;
        margin-bottom: 12%;
            }
        </style>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container mark_margin">
            <div class="row rowstyle">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <h1 style="font-family: arial">SIGN UP</h1>
                    <form method="post" action="signup_script.php">
                                <input type="text" class="form-control" name="name"placeholder="Name" pattern="[A-Za-z0-9]+" required><br>
                                <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
                                <input type="password" class="form-control" name="password" placeholder="Password" pattern="[A-Za-z0-9]{10,30}" required><br>
                                <input type="text" class="form-control" name="contact" placeholder="contact"  pattern="[0-9]{10}" required><br>
                                <input type="text" class="form-control" name="city" placeholder="City" pattern="[A-Za-z0-9]+" required><br>
                                <input type="text" class="form-control" name="address" placeholder="Address"  pattern="[A-Za-z0-9]+" required><br>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>

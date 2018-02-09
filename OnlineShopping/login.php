<?php
require 'includes/common.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootcss.css">
        <title>login</title>
        <style>
            .rowstyle{
                margin-top:8%;
                margin-left:30%;
                margin-bottom: 20%;
            }
            .keep_margin{
                margin-bottom: 50px;
            }
        </style>
    </head>
    <body>
        <?php        include 'includes/header.php'; ?>
        <div class="container">
            <div class="row rowstyle">
                <div class="col-xs-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4 style="font-family: Arial">LOGIN</h4></div>
                        <div class="panel-body">
                            <p class="text-warning"><i>Login to make a purchase</i></p>
                            <form role="form" action="login_submit.php" method="POST">
                                <input type="email" class="form-control" name="email"placeholder="Email" required><br>
                                <input type="password" class="form-control" name="password" placeholder="Password" required><br>
                                <button class="btn btn-primary keep_margin">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account?<a href="signup.html">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php        include 'includes/footer.php'; ?>
    </body>
</html>

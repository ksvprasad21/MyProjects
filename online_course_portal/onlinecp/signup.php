<!DOCTYPE html>
<?php require 'includes/common.php'; ?>
<html>
    <head>
        <title>SIGNUP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="onlinecp.css">
        <style>
            .mark_margin{
                margin-top: 10%;
                margin-bottom: 10%;
            }
        </style>
    </head>
    <body class="imagee">
        <?php include 'includes/header.php'; ?>
        <div class="container mark_margin">
            <div class="row rowstyle">
                <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                        <h1 style="color: black"><strong>SIGN UP</strong></h1>
                        <form method="post" action="signup_script.php">
                                <input type="text" class="form-control" name="name"placeholder="Userame"  required><br>
                                <input type="email" class="form-control" name="email" placeholder="Email"  required><br>
                                <input type="password" class="form-control" name="password" placeholder="Password"  required><br>
                                <input type="password" class="form-control" name="repass" placeholder="Re-type Password"   required><br>
                               
                                <button class="btn btn-primary">Submit</button>
                         </form>
                    </div>
            </div>
        </div>
    </body>
</html>

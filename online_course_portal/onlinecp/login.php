<!DOCTYPE html>
<?php require 'includes/common.php'; ?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="onlinecp.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4 style="font-family: Arial">LOGIN</h4></div>
                        <div class="panel-body">
                            <form role="form" action="student_login_script.php" method="POST">
                                <input type="email" class="form-control" name="email"placeholder="Email" required><br>
                                <input type="password" class="form-control" name="password" placeholder="Password" required><br>
                                <br>
                                <br>
                                
                                <button class="btn btn-primary keep_margin">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account?<a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>

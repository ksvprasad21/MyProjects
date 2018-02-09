<?php include 'includes/common.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>settings</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootcss.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .add_margin{
                margin-top:100px;
                margin-bottom: 30%;
            }
        </style>
    </head>
    <body>
        
        <?php include 'includes/header.php'; ?>
        <div class="container add_margin">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 style="font-family:arial">Change Password</h1>
                    <form method="POST" action="settings_script.php">
                        <input type="password" class="form-control" placeholder="Old Password" name="oldpassword"><br>
                        <input type="password" class="form-control" placeholder="New Password" name="newpassword"><br>
                        <input type="password" class="form-control" placeholder="Re-type New Password" name="modpassword"><br>
                        <button class="btn btn-primary btn-block">Change</button><br>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>


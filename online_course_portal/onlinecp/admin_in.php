<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>uploadfile</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="overdue.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .rowstyle{
                margin-top: 15%;
            }
            
        </style>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        
         <div class="container">
            <div class="row rowstyle">
                <div class="col-xs-3"></div>
                <div class="col-xs-7">
                    <div class="panel panel-primary panel-transparent">
                        <div class="panel-heading"><h4 style="font-family: Arial">Upload OverDue File</h4></div>
                        <div class="panel-body">
                            <form role="form" action="upoad_input.php" method="POST" style="text-align:center" enctype="multipart/form-data">
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000"><br><br>
                                <input name="userfile" class="form-control" type="file" id="userfile"><br><br>
                                <input type="text" name="name_file" class="form-control" placeholder="Enter The Name Of The File To be Appeared On DashBoard" required>
                                <br><br>
                                <input name="upload" type="submit" class="box" id="upload" value=" Upload" class="button button-primary">
                            </form>
                        </div>
                        <div class="panel-footer"><strong>You Can upload PDF or PPT File</strong></div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php// include 'includes/footer.php'; ?>
        
    </body>
</html>

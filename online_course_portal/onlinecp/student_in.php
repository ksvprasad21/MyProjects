<html>
<head>
<title>Download Files</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="onlinecp.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
    .keep_margin{
    margin-top: 10%;
}
</style>
</head>

<body class="imagee">
    <div class="container keep_margin">
        
           
<?php
include 'includes/common.php';
include 'includes/header.php';


$query = "SELECT id, text FROM upload";
$result = mysqli_query($connect,$query) or die('Error, query failed');
if(mysqli_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{?>
    <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    <tr><th>Course Files</th></tr>
<?php   while(list($id, $text) = mysqli_fetch_array($result))
{    
?>         
                    
                    <tr><td><a href="download.php?id=<?php echo $id?>e<?php $text ?>"><?php echo $text?></a></td></tr>
                
<?php 
}?>
                </tbody>
            </table>
    </div>
        <?php } ?>
    </div>
</body>
</html>

 
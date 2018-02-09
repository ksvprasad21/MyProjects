<?php
require 'includes/common.php';

if (isset($_SESSION['email']))
    {  
    header('location: products.php');
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootcss.css">
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
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands </p>
                    <br/>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        <div  class="container">
        <div class="row text-center add_margin">
                <div class="col-md-offset-2 col-md-3">
                    <div class="thumbnail">
                        <a href="product.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpp49lJiokzOkVwGUREK9SibclKnXy5qowIhdEuLP0gG9blcVX"></a>
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose Among The Best Available In The World</p>
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="product.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyEOEtyicq4dhttk9KOhsUa-QvmY_9r2R-Zupr1f9t-BoPwFNQGA"></a>
                            <div class="caption">
                                <h3>Watches</h3>
                                <p>Original Watches From Best Brands</p>
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="product.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsBl7mcAPT8ITrHWXsvfTty7IYG0xgZIZkfbzeezNNsjO44Riv4w"></a>
                            <div class="caption">
                                <h3>Shirts</h3>
                                <p>Our Exiquisite Collection Of Shirts</p>
                             </div>
                     </div>
                </div>
            </div>
        </div>
        <?php       include 'includes/footer.php'; ?>
    </body>
</html>

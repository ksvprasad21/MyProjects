<?php require 'includes/common.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>cart</title>
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
        
        <?php include 'includes/header.php'?>;
        <div class="container add_margin">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    
            <table class="table">
                            <tbody>
                                <tr><th>Item number</th><th>Item Name</th><th>Price</th><th></th></tr>
                                 <?php
        $user_id = $_SESSION['id'];
        $query = "SELECT * FROM useritems INNER JOIN items ON useritems.itemid = items.itemid WHERE userid='$user_id'";
        $query_result = mysqli_query($connect, $query);
        $num_rows = mysqli_num_rows($query_result);
        
        if($num_rows == 0) {
            
            echo 'Add items to the cart first';
            
        }
        else {
           
            while ($row = mysqli_fetch_array($query_result)) {
                
                $sum+= $row['price'];
                
                $id.= $row['itemid'].",";
                
                echo "<tr><td>"."#".$row['itemid']."</td><td>".$row['itemname']."</td><td>Rs".$row['price']."</td><td><a href='cart-remove.php?id={$row['itemid']}' class='remove_item_link'>Remove</a></td></tr>";
                
                     }
                $id= rtrim($id,",");
                
                echo "<tr><td></td><td>Total</td><td>Rs".$sum."</td><td><a href='success.php?itemsid=".$id."' class='btn btn-primary'>Confirm Order</a></td></tr>";
       
    }
        ?>
       
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>

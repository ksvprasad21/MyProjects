<?php

include 'includes/common.php';

$item_id = $_GET['id'];
$user_id = $_SESSION['id'];

$query = "insert into useritems(userid,itemid,status) values('$user_id','$item_id','Added to cart')";

$query_result = mysqli_query($connect, $query);

header('location: products.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


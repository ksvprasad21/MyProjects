
<?php

include 'includes/common.php';

$itemid= $_GET['id'];
$userid = $_SESSION['id'];

$query="delete  from useritems where userid='$userid' and itemid='$itemid'";

$query_result = mysqli_query($connect, $query) or die(mysqli_errno($connect));



header('location: cart.php');


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
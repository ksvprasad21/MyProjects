<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function checkifadded($item_id) {
    
   
    include 'common.php';
    
     
    $user_id = $_SESSION['id'];
    $query = "select * from useritems where itemid='$item_id' AND userid='$user_id' AND status='Added to cart'";
    /* @var $connect type */
    $query_result = mysqli_query($connect,$query);
    $num = mysqli_num_rows($query_result);
    if ($num > 0){
    return 1;}
    else{
    return 0;}
    
}

   ?> 

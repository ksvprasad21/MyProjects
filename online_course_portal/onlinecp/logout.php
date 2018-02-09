<?php 
session_start();
session_destroy();
header('location: index.php?you_are_logged_out');
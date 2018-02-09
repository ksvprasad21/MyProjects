<?php include 'includes/common.php';?>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container"> 
                    <div class="navbar-header">           
                        <a class="navbar-brand" href="index.php"><i><strong>Course Portal</strong></i></a>    
                    </div>   
                    <div class="collapse navbar-collapse" id="myNavbar">   
                        <ul class="nav navbar-nav navbar-right">   
                            <?php if((isset($_SESSION['useremail'])) or (isset($_SESSION['adminemail']))) {?>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><strong>LogOut</strong></a></li>
                            <?php } else {?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><strong>Sign Up</strong></a></li>        
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><strong>Student_Login</strong></a></li> 
                            <li><a href="admin.php"><span class="glyphicon glyphicon-cog"></span><strong>Admin_Login</strong></a></li> 
                            <?php } ?>
                        </ul>     
                    </div>    
                </div> 
            </nav>


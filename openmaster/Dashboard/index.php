<?php require_once("../api/db.php");
 session_start();
?>


	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
						<style>
	
				@media screen and (max-width:320px)
  {
video {
    width: 90%;
    height: auto;

    }
  }
			@media screen and (min-width:320px)
  {
video {
    width: 90%;
    height: 500px;

    }
  }		
				
				
			</style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><?php echo $_SESSION['Name']; ?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="Functions/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../userPhoto/<?php echo $_SESSION['Profile']; ?>" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="profile.php"><i class="fa fa-desktop fa-3x"></i> Profile</a>
                    </li>
                    <li>
                        <a  href="music.php"><i class="fa fa-qrcode fa-3x"></i> Music</a>
                    </li>
                      <li  >
                        <a  href="dance.php"><i class="fa fa-table fa-3x"></i> Dance</a>
                    </li>
                    <li  >
                        <a  href="photography.php"><i class="fa fa-edit fa-3x"></i> Photography</a>
                    </li>				
					
					                   
                    <li>
                        
                  <li  >
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i> Upload</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <?php
                       $sql = "SELECT * FROM dashfetch";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
     while($row = mysqli_fetch_array($result)) {
         if ($row[2]=="Videos")
									{
										
										echo "
														<hr>
																										<div>
																																									
																																											<img src='../userPhoto/".$row[3]."' height='40px' width='40px'>
																																											<label style='padding-left:10px;padding-top:10px;'>".$row[1]."</label>
																										</div>
																											<p style='padding-left:42px;'>$row[9]</p>
																																										<br><video width='800' height='400' controls>
																		                        <source src='videos/".$row[4]."' type='video/mp4'>
																				                     
																                          </video>
																																										<hr>
																																										
															";			
									}
									else if($row[2]=='Photo'){
										echo "<hr>
																										<div>
																																											
																																											<img src='../userPhoto/".$row[3]."' height='40px' width='40px'>
																																											<label style='padding-left:10px;padding-top:10px;'>".$row[1]."</label>
																										</div>
																										<p style='padding-left:42px;'>$row[9]</p>
																																										<br>
																		                        <img src='photography/".$row[4]."' class = 'img-responsive img-rounded' width='800' height='600'>
																																										<hr>
																										";

									}
									else if($row[2]=='Music'){
															echo "
															<hr>
																										<div>
																																											
																																											<img src='../userPhoto/".$row[3]."' height='40px' width='40px'>
																																											<label style='padding-left:10px;padding-top:10px;'>".$row[1]."</label>
																										</div>
																										<p style='padding-left:42px;'>".$row[9]."</p>
																																										<br><audio controls>
																		                        <source src='music/".$row[4]."' type='audio/mpeg'>
																				                     
																                          </audio>
																																										<hr>
																																										
															";
									}
     }
} 


mysqli_close($conn);
?>  
                    </div>
                </div>
                 <!-- /. ROW  -->
                 
                  
		   
                <!-- /. ROW  -->
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

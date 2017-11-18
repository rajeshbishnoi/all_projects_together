<?php
  include_once("sessioncondition.php");

  include_once("connectionfactory.php");
   
  
   if(isset($_POST['save'])){
    $sel="SELECT * FROM admin where admin_pass='".$_POST['old_pass']."' and admin_id='".$_SESSION['ADMINID']."'";
    $exe=mysqli_query($conn,$sel);
    $tot=mysqli_num_rows($exe);
    if($tot==1){
      
      $que="update admin set admin_pass='".$_POST['new_pass']."' where admin_id='".$_SESSION['ADMINID']."'";
      mysqli_query($conn,$que);
    
    }
    else{
          
     echo "Invalid Old Password";   
    
    }

}

?>
<!doctype html>
<html>
<head>
   <title>IIP Academy</title>
 <link href="css/style.css" rel="stylesheet" />
</head>
<body>
          <div class="header">
              <div class="headerinfo">WsCube Tech Control Panel</div>


          </div>
          <div class="middle">

                   <div class="menu">
                 <?php
                  include_once("admin_menulist.php");
                   
                   ?>
                 
                 </div>
                   
                     <div class="midmain">
                  <div class="midinnerheading">Change Password</div>
                  <form action="" method="post">
                  <div class="midinner">
                    
                       <div class="formrow">
                        
                          <div class="formlabel">Old Password : </div>
                          <div class="inputform"><input type="text" name="old_pass" value="" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>

                        <div class="formrow">
                            <div class="formlabel">New Password : </div>
                            <div class="inputform"><input type="text" name="new_pass" value="" class="textbox"/></div>
                            <div class="clear"></div>
                        </div>
                       <div class="formrow"><input type="submit" name="save" value="Save" class="button"/></div>


             </div>
           </form>
          </div>

             
        

        </div>

  <div class="footer">
          <div class="footerinfo"><a href="www.wscubetech.com">www.wscubetech.com</a></div>
          </div>


         </body>
</html>
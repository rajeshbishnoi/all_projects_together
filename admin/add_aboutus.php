<?php
   include_once("sessioncondition.php");

    $conn=mysqli_connect('localhost','root','','iipacademy');
    
    
    if(isset($_POST['update'])){
 
       $ins="update  aboutus set aboutus_title='" .$_POST['atitle']."', aboutus_description='".$_POST['adesc']. "' ";
       mysqli_query($conn,$ins);
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
                   
                   $sel="select * from aboutus";
                   $exe=mysqli_query($conn,$sel);
                   $fetch=mysqli_fetch_assoc($exe);
                   ?>
                
                 </div>
                   
                  <div class="midmain">
                  <div class="midinnerheading">About Us</div>
                   <form action="" method="post">
                  <div class="midinner">
                    
                       <div class="formrow">
                        
                          <div class="formlabel">Title : </div>
                          <div class="inputform"><input type="text" name="atitle" value="<?php echo $fetch['aboutus_title']; ?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>

                        <div class="formrow">
                            <div class="formlabel">Description : </div>
                            <div class="inputform"><textarea name="adesc" class="textarea"><?php echo $fetch['aboutus_description']; ?></textarea></div>
                            <div class="clear"></div>
                        </div>
                       <div class="formrow"><input type="submit" name="update" value="Update" class="button"/></div>


             </div>
           </form>
          </div>

        

        </div>

  <div class="footer">
          <div class="footerinfo"><a href="www.wscubetech.com">www.wscubetech.com</a></div>
          </div>


         </body>
</html>
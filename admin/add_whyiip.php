<?php

    include_once("sessioncondition.php");

    include_once("connectionfactory.php");
     // $conn=connection();
         
          if(isset($_GET['id1'])){

        $sel="select * from whyiip where whyiip_id='".$_GET['id1']."'";                   
        $exe=mysqli_query($conn,$sel);
        $fetch=mysqli_fetch_assoc($exe);   
        
        if(isset($_POST['save'])){

             $ins="update whyiip set whyiip_title='" .$_POST['iiptitle']."' , whyiip_status='".$_POST['status']. "' where whyiip_id='".$_GET['id1']."'";
        
           mysqli_query($conn,$ins);
           echo '<script>window.location="view_whyiip.php"</script>'; 
        }

      }
      else
          {
              if(isset($_POST['save'])){
 
                    $ins="insert into whyiip set whyiip_title='".$_POST['iiptitle']."' , whyiip_status='".$_POST['status']."'";
                    mysqli_query($conn,$ins);

                    echo '<script>window.location="view_whyiip.php"</script>';
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
                  <div class="midinnerheading">Add Why IIP</div>
                 <form action="" method="post">
                  <div class="midinner">
                       <div class="formrow">
                        
                          <div class="formlabel">Title : </div>
                          <div class="inputform"><input type="text" name="iiptitle" value="<?php echo @$fetch['whyiip_title']; ?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>
                          <div class="formrow">
                            <div class="formlabel">Status : </div>
                             <div class="inputform">
                               <input type="radio" name="status" value="1" <?php if(@$fetch['whyiip_status']) echo "checked";?> />Enable
                               <input type="radio" name="status" value="0" <?php if(@$fetch['whyiip_status']!="" && @$fetch['whyiip_status']!=1) echo "checked";  ?> />Disable 
                            </div>
                            <div class="clear"></div>
                         </div>
                       
                       <div class="formrow"><input type="submit" name="save" value="Update" class="button"/></div>


             </div>
           </form>
          </div>
        </div>

  <div class="footer">
          <div class="footerinfo"><a href="www.wscubetech.com">www.wscubetech.com</a></div>
          </div>


         </body>
</html>
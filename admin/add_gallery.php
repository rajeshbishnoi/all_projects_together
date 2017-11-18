<?php
     include_once("sessioncondition.php");

     include_once("connectionfactory.php");
     // $conn=connection();
     if(isset($_GET['id1'])){

        $sel="select * from gallery where gallery_id=".$_GET['id1'];                   
        $exe=mysqli_query($conn,$sel);
        $fetch=mysqli_fetch_assoc($exe);   
        
        if(isset($_POST['save'])){

         $ins="update gallery set gallery_title='" .$_POST['gtitle']."', gallery_image='".$_POST['gimage']."' , gallery_status='".$_POST['gstatus']."' where gallery_id=".$_GET['id1'];
           mysqli_query($conn,$ins);
           echo '<script>window.location="view_gallery.php"</script>'; 
        }

      }
      else{
               if(isset($_POST['save'])){
 
        $ins="insert into gallery set gallery_title='" .$_POST['gtitle']."' , gallery_status='".$_POST['gstatus']. "', gallery_image='".$_POST['gimage']. "' ";
        mysqli_query($conn,$ins);
        echo '<script>window.location="view_gallery.php"</script>'; 
        
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
                  <div class="midinnerheading">Add Gallery</div>
                  <form action="" method="post">
                  <div class="midinner">
                       <div class="formrow">
                        
                          <div class="formlabel">Title : </div>
                          <div class="inputform"><input type="text" name="gtitle" value="<?php echo @$fetch['gallery_title'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>

                        <div class="formrow">
                            <div class="formlabel">Image : </div>
                            <div class="inputform"><input type="file" name="gimage" value="<?php echo @$fetch['gallery_image'];?>" /></div>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="formrow">
                            <div class="formlabel">Status : </div>
                             <div class="inputform">
                               <input type="radio" name="gstatus" value="1" <?php if(@$fetch['gallery_status']) echo "checked";?> />Enable
                               <input type="radio" name="gstatus" value="0" <?php if(@$fetch['gallery_status']!="" && @$fetch['gallery_status']!=1) echo "checked";  ?> />Disable 
                            </div>
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
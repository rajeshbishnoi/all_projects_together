<?php
   include_once("sessioncondition.php");


   include_once("connectionfactory.php");
  
      if(isset($_GET['id1'])){
        $sel="select * from contactus where contactus_id=".$_GET['id1'];
        $exe=mysqli_query($conn,$sel);
        $fetch=mysqli_fetch_assoc($exe);   
      if(isset($_POST['update'])){
          $ins="update contactus set contactus_company_name='".$_POST['company']."',contactus_address='".$_POST['address']."'";
          $ins.=",contactus_phone_no='".$_POST['phoneno']."',contactus_mobile_no='".$_POST['mobileno']."',contactus_email_id='".$_POST['email']."'";     
          $ins.=",contactus_website='".$_POST['website']."',contactus_status='".$_POST['status']."' where contactus_id='".$_GET['id1']."'";     
          mysqli_query($conn,$ins);
          echo '<script>window.location="view_contactus.php"</script>';
      }

  }
   
    else{

   if(isset($_POST['update'])){

     $ins="insert into contactus values('','".$_POST['company']."','".$_POST['address']."','".$_POST['phoneno']."','".$_POST['mobileno']."','".$_POST['email']."','".$_POST['website']."','".$_POST['status']."');";
       mysqli_query($conn,$ins);
       echo '<script>window.location="view_contactus.php"</script>';
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
                  <div class="midinnerheading">Add Contact Us</div>
                  <form action="" method="post">
                  <div class="midinner">
                  
                       <div class="formrow">
                        
                          <div class="formlabel">Company Name : </div>
                          <div class="inputform"><input type="text" name="company" value="<?php echo @$fetch['contactus_company_name'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>

                        <div class="formrow">
                            <div class="formlabel">Address : </div>
                            <div class="inputform"><textarea name="address" class="textarea"><?php echo @$fetch['contactus_address'];?></textarea></div>
                            <div class="clear"></div>
                        </div>
                               <div class="formrow">
                        
                          <div class="formlabel">Phone No : </div>
                          <div class="inputform"><input type="text" name="phoneno" value="<?php echo @$fetch['contactus_phone_no'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>
                              <div class="formrow">
                        
                          <div class="formlabel">Mobile No : </div>
                          <div class="inputform"><input type="text" name="mobileno" value="<?php echo @$fetch['contactus_mobile_no'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>
                            <div class="formrow">
                        
                          <div class="formlabel">Email Id : </div>
                          <div class="inputform"><input type="text" name="email" value="<?php echo @$fetch['contactus_email_id'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>

                           <div class="formrow">
                        
                          <div class="formlabel">Website : </div>
                          <div class="inputform"><input type="text" name="website" value="<?php echo @$fetch['contactus_website'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>
                         <div class="formrow">
                            <div class="formlabel">Status : </div>
                             <div class="inputform">
                               <input type="radio" name="status" value="1" <?php if(@$fetch['contactus_status']) echo "checked";?> />Enable
                               <input type="radio" name="status" value="0" <?php if(@$fetch['contactus_status']!="" && @$fetch['contactus_status']!=1) echo "checked";  ?> />Disable 
                            </div>
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
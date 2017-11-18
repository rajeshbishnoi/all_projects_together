<?php
      include_once("sessioncondition.php");

      include_once("connectionfactory.php");
      // $conn=connection();

         if(isset($_GET['id1'])){
           $sel="select * from courses where courses_id=".$_GET['id1'];
           $exe=mysqli_query($conn,$sel);
           $fetch=mysqli_fetch_assoc($exe);
           if($_POST['update']){
                $ins="update courses set courses_name='" .$_POST['course']."', courses_fees='".$_POST['fees']. 
        "',courses_duration='".$_POST['duration']."' ,courses_description='".$_POST['desc']."' ,courses_status='".$_POST['status']."' where courses_id=".$_GET['id1'];
               mysqli_query($conn,$ins);
               echo '<script>window.location="view_courses.php"</script>';
              }

         }

    else{
    if(isset($_POST['update'])){
 
        $ins="insert into courses set courses_name='" .$_POST['course']."', courses_fees='".$_POST['fees']. 
        "',courses_duration='".$_POST['duration']."' ,courses_description='".$_POST['desc']."'";
        mysqli_query($conn,$ins);
        echo '<script>window.location="view_courses.php"</script>';
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
                  <div class="midinnerheading">Add Courses</div>
                  <form action="" method="post">
                  <div class="midinner">
                       <div class="formrow">
                        
                          <div class="formlabel">Course Name : </div>
                          <div class="inputform"><input type="text" name="course" value="<?php echo @$fetch['courses_name'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>

                         <div class="formrow">
                        
                          <div class="formlabel">Fees : </div>
                          <div class="inputform"><input type="text" name="fees" value="<?php echo @$fetch['courses_fees'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>
                          <div class="formrow">
                        
                          <div class="formlabel">Duration : </div>
                          <div class="inputform"><input type="text" name="duration" value="<?php echo @$fetch['courses_duration'];?>" class="textbox"/></div>
                          <div class="clear"></div>
                        </div>
                              <div class="formrow">
                            <div class="formlabel">Description : </div>
                            <div class="inputform"><textarea name="desc" class="textarea"><?php echo @$fetch['courses_duration'];?></textarea></div>
                            <div class="clear"></div>
                        </div>
                       <div class="formrow">
                            <div class="formlabel">Status : </div>
                             <div class="inputform">
                               <input type="radio" name="status" value="1" <?php if(@$fetch['courses_status']) echo "checked";?> />Enable
                               <input type="radio" name="status" value="0" <?php if(@$fetch['courses_status']!="" && @$fetch['courses_status']!=1) echo "checked";  ?> />Disable 
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
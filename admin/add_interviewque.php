<?php
 include_once("sessioncondition.php");

 include_once("connectionfactory.php");
     // $conn=connection();
   if(isset($_GET['id1'])){

      $sel="select * from interview_question where iq_id=".$_GET['id1'];
      $exe=mysqli_query($conn,$sel);
      $fetch=mysqli_fetch_assoc($exe);
       if($_POST['save']){
            
         $ins="update interview_question set iq_question='".$_POST['que']."',iq_answer='".$_POST['ans']."',iq_status='".$_POST['status']."' where iq_id=".$_GET['id1'];
          mysqli_query($conn,$ins);
          echo '<script>window.location="view_interviewque.php"</script>';
       
       }


   }

   
   else{
   
   if(isset($_POST['save'])){

    $ins="insert into interview_question values('','".$_POST['que']."','".$_POST['ans']."','".$_POST['status']."');";
       mysqli_query($conn,$ins);
       echo '<script>window.location="view_interviewque.php"</script>';
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
                  <div class="midinnerheading">Add IQ</div>
                <form action="" method="post">
                  <div class="midinner">
                    
                       <div class="formrow">
                        
                          <div class="formlabel">Question : </div>
                          <div class="inputform"><textarea name="que" class="textarea"><?php echo @$fetch['iq_question'];?></textarea></div>
                          <div class="clear"></div>
                        </div>

                        <div class="formrow">
                            <div class="formlabel">Answer : </div>
                            <div class="inputform"><textarea name="ans" class="textarea"><?php echo @$fetch['iq_answer'];?></textarea></div>
                            <div class="clear"></div>
                        </div>
                       <div class="formrow">
                            <div class="formlabel">Status : </div>
                             <div class="inputform">
                               <input type="radio" name="status" value="1" <?php if(@$fetch['iq_status']) echo "checked";?> />Enable
                               <input type="radio" name="status" value="0" <?php if(@$fetch['iq_status']!="" && @$fetch['iq_status']!=1) echo "checked";  ?> />Disable 
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
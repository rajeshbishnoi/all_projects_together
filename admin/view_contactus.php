<?php
include_once("sessioncondition.php");
    include_once("connectionfactory.php");
     // $conn=connection();
    if(isset($_GET['id']))
      {
          $del="delete from contactus where contactus_id = ".$_GET['id'];
          mysqli_query($conn, $del);
        }
     if(isset($_POST['delete']))
      {
          @$condition=implode(",",$_POST['check']);
          @$del="delete from contactus where contactus_id in(".$condition.")";
          mysqli_query($conn, $del);
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
                    
                    <div class="viewheading">View Contact Us</div>        
                    <form method="post">
                    <div class="viewinfo">
                           <div class="viewinfomid">
                                <div class="rowheading">
                                         <div class="infofix" style="height:30px;"><input type="submit" value="Delete" name="delete" /></div>
                                         <div class="infofix">Sr.No</div>
                                         <div class="infotext">Company Name</div>
                                         <div class="infotext1">Address</div>
                                         <div class="infotext">Phone No</div>
                                         <div class="infotext">Mobile No</div>
                                         <div class="infotext">Email ID</div>
                                         <div class="infotext">Website</div>
                                         <div class="infofix">Status</div>
                                         <div class="infofix">Delete</div>
                                         <div class="infofix">Edit</div>
                                         <div class="clear"></div>
                                </div>  
                                
                               <?php
                                $sel="select * from contactus";
                                $exe=mysqli_query($conn,$sel);
                                $i=1;
                                while($fetch=mysqli_fetch_assoc($exe)){ 
                                        echo ' <div class="rowheading">
                                         <div class="infofix2"><input type="checkbox" name="check[]" value="'.$fetch['contactus_id'].'"/></div>
                                         <div class="infofix2">'.$i++.'</div>
                                         <div class="infotext2">'.$fetch['contactus_company_name'].'</div>
                                         <div class="infotext11">'.$fetch['contactus_address'].'</div>
                                         <div class="infotext2">'.$fetch['contactus_phone_no'].'</div>
                                         <div class="infotext2">'.$fetch['contactus_mobile_no'].'</div>
                                         <div class="infotext2">'.$fetch['contactus_email_id'].'</div>
                                         <div class="infotext2">'.$fetch['contactus_website'].'</div>
                                         <div class="infofix2">'.$fetch['contactus_status'].'</div>
                                         <div class="infofix2">
                                            <a href="view_contactus.php?id='.$fetch['contactus_id'].'" >Delete </a>
                                         </div>
                                         <div class="infofix2">
                                           <a href="add_contactus.php?id1='.$fetch['contactus_id'].'">Edit</a>
                                         </div>
                                         <div class="clear"></div>
                                   </div>  ';
                               

                                   }              
                                    ?>

                                  </div>
        

        
            </form>

        </div>

  <div class="footer">
          <div class="footerinfo"><a href="www.wscubetech.com">www.wscubetech.com</a></div>
          </div>


         </body>
</html>
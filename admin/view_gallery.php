<?php
    include_once("sessioncondition.php");
    include_once("connectionfactory.php");
      if(isset($_GET['id']))
      {
          $del="delete from gallery where gallery_id = ".$_GET['id'];
          mysqli_query($conn, $del);
        }
     if (isset($_POST['delete'])) {
        
         @$condition= implode(",",$_POST['check']);
         @$del="delete from gallery where gallery_id in(".$condition.")";
           mysqli_query($conn,$del);  
  
    
        }   

$where='';

if(@$_POST['searchfield']!=""){

  $where ="where gallery_title like '%".trim($_POST['searchfield'])."%'";
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
                   
              <div class="viewheading">View Gallery</div>    
                     <?php $str="Search By Gallery Title"; 
                       searchTitle($str);
                    ?>
                    

                  <div class="viewinfo">
                           <form method="post">
                           <div class="viewinfomid">
                                <div class="rowheading">
                                         <div class="infofix" style="height:30px;"><input type="submit" name="delete" value="Delete" /></div>
                                         <div class="infofix">Sr.No</div>
                                         <div class="infotext1">Title</div>
                                         <div class="infotext1">Image</div>
                                          <div class="infofix">Status</div>
                                         <div class="infofix">Delete</div>
                                         <div class="infofix">Edit</div>
                                         <div class="clear"></div>
                                </div>  
                                
                               <?php
                                 $sel="select * from gallery $where order by gallery_title";
                                $exe=mysqli_query($conn,$sel);
                                $i=1;
                                while($fetch=mysqli_fetch_assoc($exe)){ 
                               
                                        echo ' <div class="rowheading">
                                         <div class="infofix2"><input type="checkbox" name="check[]" value='.$fetch['gallery_id'].' /></div>
                                         
                                         <div class="infofix2">'.$i++.'</div>
                                         <div class="infotext11">'.$fetch['gallery_title'].'</div>
                                         <div class="infotext11">'.$fetch['gallery_image'].'</div>
                                          <div class="infofix2">'.$fetch['gallery_status'].'</div>
                                         <div class="infofix2">
                                          <a href="view_gallery.php?id='.$fetch['gallery_id'].'" >Delete </a>
                                         </div>
                                         <div class="infofix2">
                                        <a href="add_gallery.php?id1='.$fetch['gallery_id'].'">Edit</a>
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
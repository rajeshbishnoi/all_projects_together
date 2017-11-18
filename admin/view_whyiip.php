<?php
//$conn=new mysqli();
      include_once("sessioncondition.php");

      include_once("connectionfactory.php");
      // $conn=connection();
      if(isset($_GET['id'])){
        $del="delete from whyiip where whyiip_id=".$_GET['id'];
        mysqli_query($conn,$del);

      }
      if(isset($_POST['delete'])){
           
        @$tot=count($_POST['check']);
          for ($i=0; $i < $tot ; $i++) { 
          
           $del="delete from whyiip where whyiip_id='".$_POST['check'][$i]."'";
             mysqli_query($conn,$del);

          }

      
      }
$where='';
if(@$_POST['searchfield']!=""){ 
  
  $where="where whyiip_title like '%".$_POST['searchfield']."%'";

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
                   
             <div class="viewheading">View Why IIP</div>     
                    
                    
                     <?php $str="Search By Why IIP Title"; 
                       searchTitle($str);
                    ?>
              

                  <div class="viewinfo">
                           <form method="post">
                           <div class="viewinfomid">
                                <div class="rowheading">
                                         <div class="infofix" style="height:30px;"><input type="submit" name="delete" value="Delete"/></div>
                                         <div class="infofix">Sr.No</div>
                                         <div class="infotext1">Title</div>
                                         <div class="infofix">Status</div>
                                         <div class="infofix">Delete</div>
                                         <div class="infofix">Edit</div>
                                         <div class="clear"></div>
                                </div>  
                                
                               <?php
                                   $sel="select * from whyiip $where order by whyiip_title";
                                $exe=mysqli_query($conn,$sel);
                                $i=1;
                                while($fetch=mysqli_fetch_assoc($exe)){ 
                                  // echo "<pre>";
                                  // print_r($fetch);
                                   // echo "</pre>";
                                
                                        echo ' <div class="rowheading">
                                         <div class="infofix2"><input type="checkbox" name="check[]" value='.$fetch['whyiip_id'].'/></div>
                                         <div class="infofix2">'.$i++.'</div>
                                         <div class="infotext11">'.$fetch['whyiip_title'].'</div>
                                         <div class="infofix2">'.$fetch['whyiip_status'].'</div>
                                         <div class="infofix2">
                                            <a href="view_whyiip.php?id='.$fetch['whyiip_id'].'">Delete</a>
                                          </div>
                                         <div class="infofix2">
                                              <a href="add_whyiip.php?id1='.$fetch['whyiip_id'].'">Edit</a>
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
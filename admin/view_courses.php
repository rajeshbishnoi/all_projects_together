<?php
include_once("sessioncondition.php");
    include_once("connectionfactory.php");
     if(isset($_GET['id'])){
      $del="delete from courses where courses_id=".$_GET['id'];
      mysqli_query($conn,$del);
       }

        if(isset($_POST['delete']))
      {
          @$condition=implode(",",$_POST['check']);
          @$del="delete from courses where courses_id in(".$condition.")";
          mysqli_query($conn, $del);
        }

$where='';
$item='id';
  if(@isset($_POST['search'])&& $_POST['searchdrop']!=null){
  
        // $item=$_POST['searchfield'];
     $where="where courses_".$_POST['searchdrop']." like '%".trim(@$_POST['searchfield'])."%'";
     $item=$_POST['searchdrop'];
   
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
                   
                  <div class="viewheading">View Courses</div>     
                  <form method="post">
                    <div class="search">
                         Sort/Search By Course&nbsp;
                        <select name="searchdrop">         
                           <option value="">--Select--</option>
                           <option value="name">Name</option>
                           <option value="fees">Fees</option>
                           <option value="duration">Duration</option>
                           <option value="description">Description</option>
                        </select>
                      <input type="text" name="searchfield" value="" />
                      <input type="submit" name="search" value="Search" />
                     </div>  
                  </form>

                  
                  <div class="viewinfo">
                           <form method="post">
                           <div class="viewinfomid">
                                <div class="rowheading">
                                         <div class="infofix" style="height:30px;"><input type="submit" value="Delete" name="delete" /></div>
                                         <div class="infofix">Sr.No</div>
                                         <div class="infotext1">Course Name</div>
                                         <div class="infotext">Fees</div>
                                         <div class="infotext">Duration</div>
                                         <div class="infotext1">Description</div>
                                         <div class="infofix">Status</div>
                                         <div class="infofix">Delete</div>
                                         <div class="infofix">Edit</div>
                                         <div class="clear"></div>
                                </div>  
                                
                               <?php
                                // $sel="select * from courses order by courses_".$item."";
                                $sel="SELECT * FROM  courses $where order by courses_".$item."";
                                
                                $exe=mysqli_query($conn,$sel);
                                $i=1;
                                while($fetch=mysqli_fetch_assoc($exe)){ 
                               
                                        echo ' <div class="rowheading">
                                         <div class="infofix2"><input type="checkbox" name="check[]" value="'.$fetch['courses_id'].'"/></div>
                                         <div class="infofix2">'.$i++.'</div>
                                         <div class="infotext11">'.$fetch['courses_name'].'</div>
                                         <div class="infotext2">'.$fetch['courses_fees'].'</div>
                                         <div class="infotext2">'.$fetch['courses_duration'].'</div>
                                         <div class="infotext11">'.$fetch['courses_description'].'</div>
                                          <div class="infofix2">'.$fetch['courses_status'].'</div>
                                         <div class="infofix2">
                                           <a href="view_courses.php?id='.$fetch['courses_id'].'">Delete</a>
                                         </div>
                                         <div class="infofix2">
                                        <a href="add_courses.php?id1='.$fetch['courses_id'].'">Edit</a>
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
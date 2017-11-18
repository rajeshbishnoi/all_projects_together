<?php
 include_once("sessioncondition.php");
   include_once("connectionfactory.php");
     // $conn=connection();
      if(isset($_GET['id']))
      {
          $del="delete from registration where reg_id = ".$_GET['id'];
          mysqli_query($conn, $del);
        }
      
         if(isset($_POST['delete']))
      {
          @$condition=implode(",",$_POST['check']);
          @$del="delete from registration where reg_id in(".$condition.")";
          mysqli_query($conn, $del);
          
        }

$where='';
$item='reg_id';
if(@isset($_POST['search']) && ($_POST['searchdrop']!="")){

    // echo "hello";
    $where="where ".$_POST['searchdrop']." like '%".trim(@$_POST['searchfield'])."%'";
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
                   
                     <div class="viewheading">View Users</div>        
                     <form method="post">
                         <div class="search">
                         Sort/Search By &nbsp;
                        <select name="searchdrop">         
                           <option value="">--Select--</option>
                           <option value="name">Name</option>
                           <option value="email">Email</option>
                           <option value="password">Password</option>
                           <option value="contactno">Contact No</option>
                           <option value="address">Address</option>
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
                                         <div class="infotext">Name</div>
                                         <div class="infotext1">Email</div>
                                         <div class="infotext">Password</div>
                                         <div class="infotext">Contact No</div>
                                         <div class="infotext1">Address</div>
                                         <div class="infofix">Delete</div>
                                        <!-- <div class="infofix">Edit</div>-->
                                         <div class="clear"></div>
                                </div>  
                                <?php
                                  $sel="SELECT * FROM  registration $where order by ".$item."";
                                  $exe=mysqli_query($conn,$sel);
                                  $i=1;
                                 while($fetch=mysqli_fetch_assoc($exe)){
                               
                                        echo ' <div class="rowheading">
                                         <div class="infofix2"><input type="checkbox" name="check[]" value="'.$fetch['reg_id'].'"/></div>
                                         <div class="infofix2">'.$i++.'</div>
                                         <div class="infotext2">'.$fetch['name'].'</div>
                                         <div class="infotext11">'.$fetch['email'].'</div>
                                         <div class="infotext2">'.$fetch['password'].'</div>
                                         <div class="infotext2">'.$fetch['contactno'].'</div>
                                         <div class="infotext11">'.$fetch['address'].'</div>
                                         
                                         <div class="infofix2">
                                          <a href="users.php?id='.$fetch['reg_id'].'" >Delete </a></div>
                                       <!--  <div class="infofix2">Edit</div>-->
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
<?php
include_once("sessioncondition.php");
    include_once("connectionfactory.php");
    
       if(isset($_GET['id']))
      {
          $del="delete from enquiry where enquiry_id = ".$_GET['id'];
          mysqli_query($conn, $del);
        }
     if(isset($_POST['delete']))
      {
          @$condition=implode(",",$_POST['check']);
          @$del="delete from enquiry where enquiry_id in(".$condition.")";
          mysqli_query($conn, $del);
        }
$where='';
$item='enquiry_id';
 if(@isset($_POST['search']) && ($_POST['searchdrop']!=null)){

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
                   
                        <div class="viewheading">View Enquiry</div>        
                  
                          <form method="post">
                          <div class="search">
                           Sort/Search By&nbsp;
                           <select name="searchdrop">
                              <option value="">--Select--</option>
                              <option value="gender">Gender</option>
                              <option value="name">Name</option>
                              <option value="contact_no">Contact No</option>
                              <option value="country">Country</option>
                              <option value="state">State</option>
                              <option value="city">City</option>
                              <option value="address">Address</option>
                              <option value="email">Email</option>
                              <option value="enquiry">Enquiry</option> 
                             </select>                          
                            <input type="text" name="searchfield" value=""/>
                            <input type="submit" name="search" value="Search"/>
                          </div>
                          </form>
               

                   <div class="viewinfo">
                           <form method="post">
                           <div class="viewinfomid">
                                <div class="rowheading">
                                         <div class="infofix" style="height:30px;"><input type="submit" value="Delete" name="delete" /></div>
                                         <div class="infofix">Sr.No</div>
                                         <div class="infofix">Gender</div>
                                         <div class="infotext">Name</div>
                                         <div class="infotext">Contact No</div>
                                         <div class="infofix">Country</div>
                                         <div class="infofix">State</div>
                                         <div class="infofix">City</div>
                                         <div class="infotext">Address</div>
                                         <div class="infotext">Email</div>
                                         <div class="infotext">Enquiry</div>
                                         <div class="infofix">Delete</div>
                                         <!-- <div class="infofix">Edit</div> -->
                                         <div class="clear"></div>
                                </div>  
                                
                               <?php
                                     $sel="SELECT * FROM  enquiry $where order by ".$item."";
                                        $exe=mysqli_query($conn,$sel);
                                  $i=1;
                                   while($fetch=mysqli_fetch_assoc($exe)){
                               
                                        echo ' <div class="rowheading">
                                         <div class="infofix2"><input type="checkbox" name="check[]" value="'.$fetch['enquiry_id'].'"/></div>
                                         <div class="infofix2">'.$i++.'</div>
                                         <div class="infofix2">'.$fetch['gender'].'</div>
                                         <div class="infotext2">'.$fetch['name'].'</div>
                                         <div class="infotext2">'.$fetch['contact_no'].'</div>
                                         <div class="infofix2">'.$fetch['country'].'</div>
                                         <div class="infofix2">'.$fetch['state'].'</div>
                                         <div class="infofix2">'.$fetch['city'].'</div>
                                         <div class="infoenquiry">'.$fetch['address'].'</div>
                                         <div class="infoenquiry">'.$fetch['email'].'</div>
                                         <div class="infoenquiry">'.$fetch['enquiry'].'</div>
                                         <div class="infofix2">
                                             <a href="view_enquiry.php?id='.$fetch['enquiry_id'].'" >Delete </a>
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
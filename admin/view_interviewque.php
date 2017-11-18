<?php
    include_once("sessioncondition.php");

    include_once("connectionfactory.php");
     if(isset($_GET['id']))
      {
          $del="delete from interview_question where iq_id = ".$_GET['id'];
          mysqli_query($conn, $del);
        }

          if(isset($_POST['delete']))
      {
          @$condition=implode(",",$_POST['check']);
          @$del="delete from interview_question where iq_id in(".$condition.")";
          mysqli_query($conn, $del);
        }


$where='';
if(@$_POST['searchfield']!=null){

$where="where iq_question like '%".trim($_POST['searchfield'])."%'";

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
                   <div class="viewheading">View Interview Question</div> 
                   <?php $str="Search by IQ";
                        searchTitle($str);
                   ?>    
                  <form method="post">
                  <div class="viewinfo">
                           <div class="viewinfomid">
                                <div class="rowheading">
                                         <div class="infofix" style="height:30px;"><input type="submit" value="Delete" name="delete" /></div>
                                         <div class="infofix">Sr.No</div>
                                         <div class="infotext1">Question</div>
                                         <div class="infotext1">Answer</div>
                                         <div class="infofix">Status</div>
                                         <div class="infofix">Delete</div>
                                         <div class="infofix">Edit</div>
                                         <div class="clear"></div>
                                </div>  
                                
                               <?php
                                 $sel="select * from interview_question $where order by iq_question";
                                $exe=mysqli_query($conn,$sel);
                                $i=1;
                                while($fetch=mysqli_fetch_assoc($exe)){ 
                               
                                        echo ' <div class="rowheading">
                                         <div class="infofix2"><input type="checkbox" name="check[]" value="'.$fetch['iq_id'].'"/></div>
                                         <div class="infofix2">'.$i++.'</div>
                                         <div class="infotext11">'.$fetch['iq_question'].'</div>
                                         <div class="infotext11">'.$fetch['iq_answer'].'</div>
                                         <div class="infofix2">'.$fetch['iq_status'].'</div>
                                         <div class="infofix2">
                                        
                                 <a href="view_interviewque.php?id='.$fetch['iq_id'].'">Delete</a>
                                         </div>
                                         <div class="infofix2">
                                         <a href="add_interviewque.php?id1='.$fetch['iq_id'].'">Edit</a>
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
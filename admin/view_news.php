<?php
    include_once("sessioncondition.php");

    include_once("connectionfactory.php");
    
      if(mysqli_connect_errno()){
          die("Connection Failed". mysqli_connect_error());//terminate the remaining part;
       }


        if(isset($_GET['id'])){
          $del="delete from news where news_id in(".$_GET['id'].")";
          mysqli_query($conn, $del);
        }
    
      if(isset($_POST['delete'])) { 

       @$condition= implode(",",$_POST['check']); 
         // echo $condition;
         // print_r($condition);
          @$del="delete from news where news_id in(".$condition.")";
          mysqli_query($conn, $del);
        // print_r($_POST['check']);
          // echo  $tot= count($_POST['check']);
      // print_r($_POST['check']);
        // $delid=$_POST['check'];
     // for ($i=0; $i < $tot; $i++) { 

    
         // $del="delete from news where news_id ='".$delid[$i]."'";
     // echo $del="delete from news where news_id ='".$_POST['check'][$i]."'";
        // mysqli_query($conn, $del);
    // }
 // }
// }
 }
$where='';
$item='news_id';

if(@$_POST['searchfield']!="")
  {
      // $where =" where news_title like '%".trim($_POST['searchfield'])."%'";
        echo  $where =" where news_title like '%".trim($_POST['searchfield'])."%' ";
         $item ="news_title";
  }


$start=0;
$end=10;

$next=$_GET['page']+1;
$prev=$_GET['page']-1;

$start=$_GET['page'] * $end;

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

                 <div class="viewheading">View News</div> <div class="clear"></div>
 
                    <?php $str="Search By News Title"; 
                       searchTitle($str);
                    ?>
                         
                x
                <!--  <div class="viewinfo">
                     <table border="2" align="center" width="500" />
                          <tr>
                            <th>Delete</th>
                            <th>Sr.No.</th>
                            <th>News Title</th>
                            <th>News Desc</th>
                            <th>Delete</th>
                            <th>Edit</th>
                          </tr>
                           
                          <?php
                            for($i=1;$i<=4;$i++){
                           
                           echo '<tr>
                               <td><input type="checkbox" name="check1" value='.$i.' /></td>
                               <td>'.$i.'</td>
                               <td></td>
                               <td></td>
                               <td>Delete</td>
                               <td>Edit</td>

                            </tr> ';
                           
                           } 
                            ?>                                 
                     
                      </table>


                 </div>  -->               

             <div class="viewinfo">
                          <form method="post">
                            <div class="viewinfomid">
                                  <div class="rowheading">
                                         <div class="infofix" style="height:30px;"><input type="submit" value="Delete" name="delete" /></div>
                                         <div class="infofix">Sr.No</div>
                                         <div class="infotext1">Title</div>
                                         <div class="infotext1">Description</div>
                                         <div class="infofix">Status</div>
                                         <div class="infofix">Delete</div>
                                         <div class="infofix">Edit</div>
                                         <div class="clear"></div>
                                </div>  
                                
                               <?php

                                  $sel="SELECT * FROM  news $where order by $item  limit $start , $end ";
                                  // $exe=mysql_query($sel);
                                  $exe=mysqli_query($conn,$sel);
                                  // $fetch1=mysqli_fetch_row($exe);//fetch the row;
                                  // print_r($fetch1);
                                  //$fetch=mysqli_fetch_object($exe) //fetch the object;
                                  //$fetch=mysqli_fetch_array($exe,MYSQLI_ASSOC)
                                  // $fetch=mysqli_fetch_assoc($exe) // fetch the associative array;
                                  $i=$start+1;
                                 while($fetch=mysqli_fetch_assoc($exe)){
                                       // var_dump($fetch);//dumps the content of row on screen;
                                       // print_r($fetch);
                                        echo ' 
                                        <div class="rowheading">
                                         <div class="infofix2"><input type="checkbox"  name="check[]" value='.$fetch['news_id'].'></div>
                                         <div class="infofix2">'.$i++.'</div>
                                         <div class="infotext11">'.$fetch['news_title'].'</div>
                                         <div class="infotext11">'.$fetch['news_description'].'</div>
                                         <div class="infofix2">'.$fetch['news_status'].'</div>
                                         <div class="infofix2">  
                                          <a href="view_news.php?id='.$fetch['news_id'].'" >Delete </a>
                                        
                                         </div>
                                         <div class="infofix2">
                                         <a href="add_news.php?id1='.$fetch['news_id'].'">Edit</a>
                                         </div>
                                         <div class="clear"></div>
                                   </div>  ';
                                  }
                                  mysqli_free_result($exe);//free the variable so that server will not slow;                
                                  ?>
                                </div>
</form>

<!--paging -->


                                <div class="rowheading">
                                  <a href="view_news.php?page=0">First </a>
                                  
                                  <a href="view_news.php?page=<?php echo $prev;?>">Prev </a>

                                 <?php
                                  $sel="SELECT * FROM  news $where  ";
                                  $exe=mysqli_query($conn,$sel);
                                  $tot=mysqli_num_rows($exe);
                                  $ftot= ceil($tot / $end);
                                 
                                 for($a=1;$a<=$ftot ; $a++)
                                    {
                                 ?>
                                        <a href="view_news.php?page=<?php echo $a-1;?>"> <?php echo $a; ?> </a>
                                    
                                 <?php   }
                                 ?>
                                  <a href="view_news.php?page=<?php echo $next;?>">Next </a>

                                  Last 
                                </div>  
</div>

  <div class="footer">
          <div class="footerinfo"><a href="www.wscubetech.com">www.wscubetech.com</a></div>
  </div>
</body>
</html>
 <?php mysqli_close($conn);//connection closed;
?>
<?php
      include_once("sessioncondition.php");

      include_once("connectionfactory.php");
     
     if($_SESSION['ADMINID']=="")
        echo '<script>window.location="index.php"</script>';

     if(isset($_GET['id1'])){

        $sel="select * from news where news_id=".$_GET['id1'];                   
        $exe=mysqli_query($conn,$sel);
        $fetch=mysqli_fetch_assoc($exe);   
        
        if(isset($_POST['save'])){

           $ins="update news set news_title='" .$_POST['ntitle']."', news_description='".$_POST['ndesc']. "', news_status='".$_POST['nstatus']."' where news_id='".$_GET['id1']."'";
           mysqli_query($conn,$ins);
           echo '<script>window.location="view_news.php"</script>'; 
        }
             
      
      }
      else
          {
              if(isset($_POST['save'])){
 
                    $ins="insert into news set news_title='" .$_POST['ntitle']."', news_description='".$_POST['ndesc']."', news_status='".$_POST['nstatus']. "' ";
                    mysqli_query($conn,$ins);

                    echo '<script>window.location="view_news.php"</script>';
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
                  <div class="midinnerheading">Add News</div>
                  <form action="" method="post">
                  <div class="midinner">
                    <h3>*Required News</h3>
                       <div class="formrow">
                        
                          <div class="formlabel">Title* : </div>
                          <div class="inputform"><input type="text" name="ntitle" value="<?php 
                                 echo @$fetch['news_title'];
                             ?>" class="textbox"/></div>
                          
                          <div class="clear"></div>
                        </div>

                        <div class="formrow">
                            <div class="formlabel">Description : </div>
                            <div class="inputform"><textarea name="ndesc" class="textarea"><?php echo @$fetch['news_description'] ?></textarea></div>
                            <div class="clear"></div>
                        </div>
                                                
                         <div class="formrow">
                            <div class="formlabel">Status : </div>
                             <div class="inputform">
                               <input type="radio" name="nstatus" value="1" <?php if(@$fetch['news_status']) echo "checked";?> />Enable
                               <input type="radio" name="nstatus" value="0" <?php if(@$fetch['news_status']!="" && @$fetch['news_status']!=1) echo "checked";  ?> />Disable 
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
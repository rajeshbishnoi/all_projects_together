<?php 
include_once("connectionfactory.php");
if(isset($_POST['login']))
{
        $sel="SELECT * FROM admin where admin_name='".$_POST['uname']."'  and admin_pass='".$_POST['upassword']."'";
        $exe=mysqli_query($conn,$sel);
        @$tot=mysqli_num_rows($exe);

        if($tot==1){

              if(@$_POST['urem']==1)
                  {
                      
                      setcookie('USERNAME',$_POST['uname'], time()+60);
                      setcookie('PASSWORD',$_POST['upassword'], time()+60);

                  }
                
                $fetch=mysqli_fetch_assoc($exe);
              
                session_start();
                $_SESSION['ADMINID']=$fetch['admin_id'];
              
                echo '<script>window.location="home.php"</script';
            }
         else{
              $msg= 'Invalid Username and Password';
              echo $msg;
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
              <div class="headerinfo">Control Panel</div>


          </div>
          <div class="middle">
               <form action="" method="post">
               <div class="middiv">
                    <div class="formrow">
                        <div class="formlabel">User Name : </div>
                        <div class="inputform"><input type="text" name="uname" value="<?php echo @$_COOKIE['USERNAME']; ?>" class="textbox"/></div>
                        <div class="clear"></div>
                  </div>

                <div class="formrow">
                       <div class="formlabel">Password : </div>
                        <div class="inputform"><input type="password" name="upassword" value="<?php echo @$_COOKIE['PASSWORD']; ?>" class="textbox"/></div>
                         <div class="clear"></div>
                  </div>

                   <div class="formrow">
                       <div class="formlabel">Remember Me : </div>
                        <div class="inputform"><input type="checkbox" name="urem" value="1" /></div>
                         <div class="clear"></div>
                  </div>

                <div class="formrow">
                     
                                <input type="submit" name="login" value="Login" class="button"/>
                         </div>
               </div>
             </form>
             </div>
      </div>
          <div class="footer">
          <div class="footerinfo"><a href="www.wscubetech.com">www.wscubetech.com</a></div>
          </div>

</body>
</html>
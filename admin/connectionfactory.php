<?php 
 
 $conn=mysqli_connect('localhost','root','','srm');
 
 function searchTitle($str){
     
     echo '<form action="" method="post">
                          <div class="search">
                             '. $str.'
                          <input type="text" name="searchfield" value="" /> 
                          <input type="submit" name="Search" value="Search" /> 
                        </div>
                    </form>  
              ';

 }

?>
<?php 
include_once("sessioncondition.php");
unset($_SESSION['ADMINID']);
echo '<script>window.location="index.php"</script>';
?>

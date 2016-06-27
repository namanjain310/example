<?php include_once('connect.inc');?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
        {
      // username and password sent from form 
      
      $myusername = trim($_POST['uname']);
      $mypassword = md5(trim($_POST['password'])); 
      
      $sql = "SELECT id,uname FROM `user` WHERE `uname` = '$myusername' and `password` = '$mypassword'";
      $result = mysql_query($sql);
      
      $row = mysql_fetch_object($result);
      if(isset($row->id)){
        $_SESSION['userId']=$row->id;
        $_SESSION['uname']=$row->uname;
        header("location: index.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   if(isset($_GET["action"])){
    if($_GET["action"]=="logout"){
        session_destroy();
        header("location: index.php");
    }
   }
?>
    




<?php
 include_once 'connect.inc';
 if(isset($_POST["submit"])){
   extract($_POST);
   $flag=true;
   $message='';
  
   if(trim($uname)==''){
        $flag=false;
        $message .='<li>User name required</li>';    
   }
   
   if(strlen($uname) < 3){
        $flag=false;
        $message .='<li>User Name must be 5 character</li>';    
   }
   if (!preg_match("/^[a-zA-Z0-9]*$/",$uname)) 
    {
    $flag=false;
    $message.='<li> Only alphanumeric characters are allowed</li>';
    }
   if(trim($password)==''){
        $flag=false;
        $message .='<li>Password required</li>';
   }
   
   if(trim($confirm_password)==''){
        $flag=false;
        $message .='<li>Confirm password required</li>';
   }
   if(strcmp($password,$confirm_password)){
        $flag=false;
        $message .='<li>Password and Confirm Password should be same</li>';
   }
  
   if(trim($fname)==''){
        $flag=false;
        $message .='<li>First Name required</li>';
   }
   if(trim($email)==''){
        $flag=false;
        $message .='<li>E-mail id required</li>';
        
   }
$sql    = "select * from  `user` where `uname` like '$uname'";
$result = mysql_query($sql, $link);
$num_rows = mysql_num_rows($result);
/*print_r($num_rows); die("exit");*/
   if($num_rows>=1)
   {
       $flag=false;
       $message .='<li>Username already exists</li>';
   }
        if($flag){  
        $md5password =  md5($password);    
        $querystring= "Insert INTO `user` (`uname`,`password`,`fname`,`lname`,`email`) VALUES ('$uname','$md5password','$fname','$lname','$email')";
        if(mysql_query($querystring)){
             header("location:index.php?front=message");
           
        }}
 }
?>

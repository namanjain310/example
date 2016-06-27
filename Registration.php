<?php
$message=array();
$uerror=array();
$perror=array();
$cperror=array();
$ferror=array();
$emailerror=array();

if(isset($_POST['submit']))
{
    
if($_POST['password']!= $_POST['rpassword_confirmation'])
{
    $message["password"]= "Wrong password";
}

if (empty($_POST["uname"])) 
{
    $uerror["uname"] = "UserName is required";
    // echo $uerror["uname"];
    // die;
}
 else 
{
        $uname = $_POST["uname"];
  if (!preg_match("/^[a-zA-Z0-9]*$/",$uname)) 
    {
    $uerror["uname"] = "Only alphanumeric characters are allowed";
    }  
}
if(empty($_POST["password"]))
{
    $perror["password"]="Password field not be empty";
}
 else 
{
    $password =$_POST["password"];
}
if(empty($_POST["rpassword_confirmation"]))
{
    $cerror["rpassword_confirmation"]="Confirm Password field not be empty";
}
 else
{
     $password_confirmation = $_POST["rpassword_confirmation"];
}
if (empty($_POST["email"])) {
$emailerror["email"] = "Email is required";
} else {
$email = $_POST["email"];
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailerror["email"] = "Invalid email format";
}
}
if (empty($_POST["uname"])) 
{
    $ferror["fname"] = "FirstName is required";
    // echo $uerror["uname"];
    // die;
}
 else 
{
        $fname = $_POST["fname"];
}
//if(isset($_POST["uname"]))
  //  {
//"<input type='text' name='uname' id='username' value='" echo $_POST["uname"];"'>"
//}
}
?>

<html>
    <head>
        
    </head>
<body>
<form action="Registration.php" method="post">
    <image src="">
<table  align="center" border="1">
<tr>
    <td>
<label for="username"> Username: *</label>
</td>
<td>
<input type="text" name="uname" id="username" value="<?php echo $_POST["uname"];?>"/>
</td>
</tr>
<?php if(isset($uerror["uname"])) {  ?>
<tr>
    <td><?php echo $uerror["uname"]; ?></td>
</tr>    
<?php } ?>

<tr>
    <td>
<label for="password"> Password: *</label>
    </td>
    <td>
<input type="password" name="password" id="register_password" maxlength="12" value ="<?php echo $_POST["password"];?>"/>
    </td>
</tr>
<?php if(isset($perror["password"])) {  ?>
<tr>
    <td><?php echo $perror["password"]; ?></td>
</tr>    
<?php } ?>
<tr>
    <td>
<label for="Password_confirmation"> Password confirmation: *</label>
    </td>
    <td><input type="password" name="rpassword_confirmation" id="password_confirmation" value="<?php echo $_POST["rpassword_confirmation"];?>"/></td>
</tr>
<?php if(isset($cerror["rpassword_confirmation"])) {  ?>
<tr>
    <td><?php echo $cerror["rpassword_confirmation"]; ?></td>
</tr>    
<?php } ?>
<?php if(isset($message["password"])) {  ?>
<tr>
    <td><?php echo $message["password"]; ?></td>
</tr>    
<?php } ?>
<tr>
<td >
<label for="Firstname"> First Name: *</label>
</td>
<td>
<input type="text" name="fname" id="fname" value="<?php echo $_POST["fname"];?>" />
</td>
</tr>
<?php if(isset($ferror["fname"])) {  ?>
<tr>
    <td><?php echo $ferror["fname"]; ?></td>
</tr>    
<?php } ?>
<tr>
<td >

<label for="Lastname"> LastName: </label>
</td>
<td  >
<input type="text" name="lname" id="lname" value="<?php echo $_POST["lname"];?>"/>
</td>
</tr>
<tr>
<td >
<label for="email"> E-mail ID: *</label>
</td>
<td>
<input type="email" name="email" id="email" value="<?php echo $_POST["email"];?>"/>
</td>
</tr>
<?php if(isset($emailerror["email"])) {  ?>
<tr>
    <td><?php echo $emailerror["email"]; ?></td>
</tr>    
<?php } ?>
<tr>
    <td colspan="2">
<input type="submit" name='submit' value="Register" />
    </td>
</tr>
</table>
</form>
</body>
</html>
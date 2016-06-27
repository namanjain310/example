<html>
    <head>
        <title>Registration</title>
    
<link rel="stylesheet" type="text/css" href="CSS.css" >
    </head>
    <body>
        <div id="header">
            <h1>City Gallery</h1>
        </div>
         <div id="menu">
             <ul >
                <li><a href="/">Home</a></li>
                <?php if(!isset($_SESSION['userId'])): ?>
                <li><a href="/reg.php">Registration</a></li>
                <li><a href="/login.php">Login</a></li>
                <?php endif; ?>
            <?php if(isset($_SESSION['userId'])): ?>
                <li style="float:right;"><a href="profile.php">Profile</a></li>
                 <li style="float:right;"><a  href="/user.php?action=logout" >Logout</a></li>
             </ul>
            <?php endif; ?>
        </div>
        <div id="nav">
            London<br>
            Paris<br>
            Tokyo
        </div>
        
    
       
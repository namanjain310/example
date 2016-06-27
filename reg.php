<?php include_once('function.inc'); ?>
<?php include_once('header.inc'); ?>
<div id="section">
    <h1>Registration</h1>
    <div id="register">
        <img src="registration.jpg" alt="reg" width="150px">
        <form autocomplete="off" action="reg.php" method="post">
            
            <?php if($message!=""): ?>            
                <ul class='message'>
                <?php echo $message; ?> 
               </ul>                
            <?php endif; ?>
        <div class="form-div">
            <div class="group">
                <label class="js-form-required form-required">Username</label>
                <div class="input"><input autocomplete="off" type="text" name="uname" id="uname" value="<?php echo $uname; ?>"></div>
            </div>
            <div class="group">
                <label class="js-form-required form-required">Password</label>
                <div class="input"><input type ="password" name="password" id="password" value=""></div>
            </div>
            <div class="group">
                <label class="js-form-required form-required">Confirm Password</label>
                <div class="input"><input type ="password" name="confirm_password" id="confirm_password" value=""></div>
            </div>
            <div class="group">
                <label class="js-form-required form-required">FirstName</label>
                <div class="input"><input type ="text" name="fname" id="fname" value="<?php echo $fname; ?>"></div>
            </div>
            <div class="group">
                <label class="js-form-required form-required">LastName</label>
                <div class="input"><input type="text" name="lname" id="lname" value="<?php echo $lname; ?>"></div>
            </div>
            <div class="group">
                <label class="js-form-required form-required">E-mail</label>
                <div class="input"><input type="email" name="email" id="email" value="<?php echo $email; ?>"></div>
            </div>
            <div class="group">               
                <div class="input"><input type="submit" name="submit" id="submit" value="SUBMIT"></div>
            </div>
          
            <br>
            
        </div>
        </form>
    </div>
</div>
<?php include_once('footer.inc'); ?>
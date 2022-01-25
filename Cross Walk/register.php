<?php
require 'config/config.php';
require  'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';


?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Cross Walk</title>

    <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>

<body>

<!-- Register button please check JS code below -->
    <?php

if(isset($_POST['register_button'])) {
echo '
<script>

$(document).ready(function() {
        $("#first").hide();
        $("#second").show();
});

</script>

';

}
    ?>
    
    <div class="wrapper">
        
        <div class="login_box">
            <div class="login_header">
                <h1>Cross Walk</h1>
                Login or Sign Up Below!
                </div>

                <div id="first">
                       <form action="register.php" method="POST">
                    <input type="email" name="log_email" placeholder="Email Address" value="<?php
                                                                                    if (isset($_SESSION['log_email'])) {
                                                                                        echo $_SESSION['log_email'];
                                                                                    }
                                                                                    ?>" required>
            <br>
            <input type="password" name="log_password" placeholder="Password">
            <?php if (in_array("Email or Password  was incorrect<br>", $error_array))  echo  "Email or Password  was incorrect<br>"; ?>
            <br>
            <input type="submit" name="login_button" value="Login">
            <br><br>
            <a href="#" id="signup" class="signup">Already Have an Account? Sign in here!</a>

        </form>    
                </div>
             
                <div id="second">
                    <form action="register.php" method="POST">
            <input type="text" name="reg_fname" placeholder="First Name" value="<?php
                                                                            if (isset($_SESSION['reg_fname'])) {
                                                                                echo $_SESSION['reg_fname'];
                                                                            }
                                                                            ?>" required>
        <br>
        <?php if (in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
        
        <input type="text" name="reg_lname" placeholder="Last Name" value="<?php
                                                                            if (isset($_SESSION['reg_lname'])) {
                                                                                echo $_SESSION['reg_lname'];
                                                                            }
                                                                            ?>" required>
        <br>
        <?php if (in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>
        
        <input type="email" name="reg_email" placeholder="Email" value="<?php
                                                                        if (isset($_SESSION['reg_email'])) {
                                                                            echo $_SESSION['reg_email'];
                                                                        }
                                                                        ?>" required>
        <br>
        
        
        <input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php
                                                                                    if (isset($_SESSION['reg_email2'])) {
                                                                                        echo $_SESSION['reg_email2'];
                                                                                    }
                                                                                    ?>" required>
        <br>
        
        <?php if (in_array("Sorry, this email has already been taken<br>", $error_array)) echo "Sorry, this email has already been taken<br>";
        else if (in_array("Invalid Email format<br>", $error_array)) echo  "Invalid Email format<br>";
        else if (in_array("Sorry, emails don't match<br>", $error_array)) echo   "Sorry, emails don't match<br>"; ?>


<input type="password" name="reg_password" placeholder="Password" required>
<br>


<input type="password" name="reg_password2" placeholder="Confirm Password" required>
<br>

<?php if (in_array("Your password can only contain English characters or numbers <br>", $error_array)) echo "Your password can only contain English characters or numbers <br>";
        else if (in_array("Your password must be between 5 and 30 characters<br>", $error_array)) echo "Your password must be between 5 and 30  characters<br>";
        else if (in_array("Sorry, Your passwords don't match<br>", $error_array)) echo  "Sorry, Your passwords don't match<br>"; ?>



<input type="submit" name="register_button" value="Register">
<a href="#" id="signin" class="signin">Need an Account? Register here!</a>


<br>
<?php if (in_array("<span style = 'color: green;' >You're all set! Go ahead and log in.</span><br>", $error_array)) echo "<span style = 'color: green;' >You're all set! Go ahead and log in.</span><br>";

?>
            
</form>


                </div>
        
</div>
</div>

</body>

</html>
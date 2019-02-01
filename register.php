<?php
  include("includes/classes/Account.php");
   $account = new Account();

   include("includes/classes/Constants.php");
   
  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");
?>



<html>
<head>
   <title>Welcome to Musicify!!</title>
  </head>
<body>
    <div id='inputContainer'> </div>

    <form action="register.php" method='POST' id='loginForm'>
    
    <h2> Login to your account</h2>

   <p> <label for='loginUsername'> Username </label> <input id='loginUsername' name='loginUsername' type='text' placeholder='Name' required></p>
    <p>
    <label for='loginPassword'> Password </label><input id='loginPassword' name='loginPassword' type='password' required></p>

    <button type='submit' name="loginButton">Log in</button>

    
    </form>

    <form action="register.php" method='POST' id='registerForm'>
    
    <h2> Create a free account</h2>

   <p> <?php echo $account->getError(Constants::$usernameCharacters); ?>
   <label for='registerUsername'> Username </label> <input id='registerUsername' name='registerUsername' type='text' placeholder='Name' required></p>
   <p> <?php echo $account->getError( Constants::$firstNameCharacters); ?><label for='firstName'> First Name </label> <input id='firstName' name='firstName' type='text' placeholder='Name' required></p>
   <p> <?php echo $account->getError(Constants::$lastNameCharacters); ?><label for='registerLastName'> Last Name </label> <input id='registerLastName' name='registerLastName' type='text' placeholder=' Last Name' required></p>
   <p> <?php echo $account->getError( Constants::$emailInvalid); ?><label for='registerEmail'> Email </label> <input id='registerEmail' name='registerEmail' type='email' placeholder='email' required></p>

    
    <p>
    <?php echo $account->getError( Constants::$passwordsDoNotMatch); ?>
    <?php echo $account->getError( Constants::$passwordNotAlphanumeric); ?>
    <?php echo $account->getError( Constants::$passwordCharacters); ?>


    <label for='registerPassword'> Password </label><input id='registerPassword' name='registerPassword' type='password' required></p>
    <p>



    <label for='registerPasswordConfirmation'> Password Confirmation </label><input id='registerPasswordConfirmation' name='registerPasswordConfirmation' type='password' required></p>

    <button type='submit' name="registerButton">Register</button>

    
    </form>
</body>

</html>
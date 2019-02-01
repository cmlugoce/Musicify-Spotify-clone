<?php
function sanitizeFormPassword($inputText){
    $inputText = strip_tags($inputText);
   
   return $inputText;
}
function sanitizeFormUSername($inputText){
    $inputText = strip_tags($inputText);
   $inputText = str_replace(" ", "", $inputText);
   return $inputText;
}

function sanitizeFormString($inputText){
   $inputText = strip_tags($inputText);
   $inputText = str_replace(" ", "", $inputText);
   $inputText = ucfirst(strtolower($inputText));
   return $inputText;
}





if(isset($_POST['registerButton'])){
   // echo 'Register button was pressed';
   $username =sanitizeFormUSername($_POST['registerUsername']);
   $firstname = sanitizeFormString($_POST['firstName']);    
   $lastName = sanitizeFormString($_POST['registerLastName']);
   $email = sanitizeFormString($_POST['registerEmail']);
   $password =  sanitizeFormPassword($_POST['registerPassword']);
   $password2 = sanitizeFormPassword($_POST['registerPasswordConfirmation']);

  $wasSuccessful = $account->register($username, $firstname, $lastName, $email, $password, $password2);   
  if($wasSuccessful==true){
      header("Location: index.php");
  }

}

?>
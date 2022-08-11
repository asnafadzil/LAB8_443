<html>
    <body>
        <form action ="add_user.php" method = "post">
            Firstname: <input type="text" name="firstname" required><br>
            Lastname: <input type="text" name="lastname" required><br>
            Email: <input type="email" name="email" required><br>
            Password: <input type="password" name="password" required><br>

<?php
$msg="";
if(isset($_POST['password'])) {
  $pass_word = $_POST['password'];
  $number = preg_match('@[0-9]@', $pass_word);
  $uppercase = preg_match('@[A-Z]@', $pass_word);
  $lowercase = preg_match('@[a-z]@', $pass_word);
 
  if(strlen($pass_word) < 8 || !$number || !$uppercase || !$lowercase ) {
    $msg = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
  } else {
    $msg = "Your password is strong.";
  }
}
?>
            Registeration Date: <input type="date" name="reg_date" required><br>
            <input type="submit" value="Submit Data">
</form>
</body>
</html>



<?php
$uname = $_POST['uname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$email_confirm = $_POST['email_confirm'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Illumination Music - Signup Results</title>
</head>

<body>
  <h1 align="center">Signup Results</h1>
  <div align="center">
    <h3>Your Entries:</h3>
    <?php
    echo 'Username: ' . $uname . '<br>';
    echo 'First name: ' . $fname . '<br>';
    echo 'Last name: ' . $lname . '<br>';
    echo 'Email: ' . $email . '<br>';
    echo 'Email Confirmation: ' . $email_confirm . '<br>';
    echo 'Password: ' . $password . '<br>';
    echo 'Password Confirmation: ' . $password_confirm . '<br>';
    ?>
    <br>
    <h3> Under Construction. Next step: Validate username or email is not in database before adding to database. </h3>
    <h3> Validate emails and passwords match confirmation. </h3>
  </div>
</body>

</html>
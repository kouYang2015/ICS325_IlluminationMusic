<?php
$uname = $_POST['uname'];
$email = $_POST['email'];
$playlistCount = $_POST['playlistCount'];
$playlistName = $_POST['playlistName'];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Illumination Music - Forgot Password Results</title>
</head>

<body>
  <h1 align="center">Forgot Password Results</h1>
  <div align="center">
    <h3>Your Entries:</h3>
    <?php
    echo 'Username: ' . $uname . '<br>';
    echo 'Email: ' . $email . '<br>';
    echo 'Number of playlists: ' . $playlistCount . '<br>';
    echo 'Playlist Name: ' . $playlistName . '<br>';
    ?>
    <br>
    <h3> Under Construction </h3>
  </div>
</body>

</html>
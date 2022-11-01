<!DOCTYPE html>
<html>

<head>
  <title>Illumination Music - Edit Profile</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      font-size: 20px;
    }

    .navbar {
      overflow: hidden;
      background-color: white;
    }

    .navbar a {
      float: left;
      font-size: 20px;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      float: right;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: black;
      padding: 13px 40px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      background-color: white;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    form.searchPlaylist input[type=text] {
      padding: 7px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 80%;
      background: #f1f1f1;
    }

    form.searchPlaylist button {
      float: left;
      width: 5%;
      padding: 12px;
      background: #2196F3;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none;
      cursor: pointer;
    }

    h1 {
      font-size: 32px;
    }
  </style>
</head>

<body>
  <div class="navbar">
    <a href="homePage.html"><img src="https://brandeps.com/icon-download/M/Music-icon-vector-03.svg" style="width:50px;height:50px;"></a>
    <a href="homePage.html">Home</a>
    <a href="userpage.php">Playlist</a>

    <div class="dropdown">
      <img class="dropbtn" src="https://pic.onlinewebfonts.com/svg/img_24787.png" style="width:40px;height:40px;">
      <div class="dropdown-content">
        <a href="user_setting.php">Account</a>
        <a href="EditProfile_email.html">Security</a>
        <a href="#">Log out</a>
      </div>
    </div>

    <form action="search-action-page" class="searchPlaylist">
      <input type="text" placeholder="Search.." id="search" name="search" style="width:200px;height:30px;">
      <button type="submit"><i class="fa fa-search"></i>search</button>
    </form>
  </div>

  <div class="header">
    <h1>Your Playlists</h1>
  </div>

  <table class="playlist" style="width: 90%">
    <tr class="top">
      <th class="title"><a href="samplePlaylist.html"><img src="https://cdn.pixabay.com/photo/2017/05/09/10/03/music-2297759_960_720.png" style="width:200px; height:200px;"></a></th>
      <th class="title"><a href="samplePlaylist.html"><img src="https://cdn.pixabay.com/photo/2017/05/09/10/03/music-2297759_960_720.png" style="width:200px; height:200px;"></a></th>
      <th class="title"><a href="samplePlaylist.html"><img src="https://cdn.pixabay.com/photo/2017/05/09/10/03/music-2297759_960_720.png" style="width:200px; height:200px;"></a></th>
      <th class="title"><a href="samplePlaylist.html"><img src="https://cdn.pixabay.com/photo/2017/05/09/10/03/music-2297759_960_720.png" style="width:200px; height:200px;"></a></th>
    </tr>
    <tr>
      <td style="font-size:23px; font-weight:bold; padding:10px 8%;">Park Hangs</td>
      <td style="font-size:23px; font-weight:bold; padding:10px 8%;">Park Hangs</td>
      <td style="font-size:23px; font-weight:bold; padding:10px 8%;">Park Hangs</td>
      <td style="font-size:23px; font-weight:bold; padding:10px 8%;">Park Hangs</td>
    </tr>
    <tr>
      <td style="font-size:20px; padding:10px 8%;"><a href="EditPlaylist.html">Edit</a>/<a href="#delete">Delete</a></td>
      <td style="font-size:20px; padding:10px 8%;"><a href="EditPlaylist.html">Edit</a>/<a href="#delete">Delete</a></td>
      <td style="font-size:20px; padding:10px 8%;"><a href="EditPlaylist.html">Edit</a>/<a href="#delete">Delete</a></td>
      <td style="font-size:20px; padding:10px 8%;"><a href="EditPlaylist.html">Edit</a>/<a href="#delete">Delete</a></td>
    </tr>
    <tr>
      <th class="title"><a href="samplePlaylist.html"><img src="https://cdn.pixabay.com/photo/2017/05/09/10/03/music-2297759_960_720.png" style="width:200px; height:200px;"></a></th>
      <th class="title"><a href="samplePlaylist.html"><img src="https://cdn.pixabay.com/photo/2017/05/09/10/03/music-2297759_960_720.png" style="width:200px; height:200px;"></a></th>
      <th class="title"><a href="samplePlaylist.html"><img src="https://cdn.pixabay.com/photo/2017/05/09/10/03/music-2297759_960_720.png" style="width:200px; height:200px;"></a></th>
      <th class="title"><a href="samplePlaylist.html"><img src="https://cdn.pixabay.com/photo/2017/05/09/10/03/music-2297759_960_720.png" style="width:200px; height:200px;"></a></th>
    </tr>
    <tr>
      <td style="font-size:23px; font-weight:bold; padding:10px 8%;">Park Hangs</td>
      <td style="font-size:23px; font-weight:bold; padding:10px 8%;">Park Hangs</td>
      <td style="font-size:23px; font-weight:bold;  padding:10px 8%;">Park Hangs</td>
      <td style="font-size:23px; font-weight:bold; padding:10px 8%;">Park Hangs</td>
    </tr>
    <tr>
      <td style="font-size:20px; padding:10px 8%;"><a href="EditPlaylist.html">Edit</a>/<a href="#delete">Delete</a></td>
      <td style="font-size:20px; padding:10px 8%;"><a href="EditPlaylist.html">Edit</a>/<a href="#delete">Delete</a></td>
      <td style="font-size:20px; padding:10px 8%;"><a href="EditPlaylist.html">Edit</a>/<a href="#delete">Delete</a></td>
      <td style="font-size:20px; padding:10px 8%;"><a href="EditPlaylist.html">Edit</a>/<a href="#delete">Delete</a></td>
    </tr>



</body>

</html>
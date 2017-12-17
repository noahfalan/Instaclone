<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instaclone</title>
  </head>
  <link rel="stylesheet" href="css/index.css">
  <body>
    <img src="title.png" alt="TheWall">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet">
<nav>
  <ul>
    <li><a href="#link">H<span>ome</span></a></li>
    <li><a href="register.php">R<span>egister</span></a></li>
    <li><a href="login.html">L<span>ogin</span></a></li>
    <li><a href="upload.php">U<span>pload</span></a></li>
</ul>
</nav>

<div class="flexContainer">
  <?php
  include "config.php";
    $dbc = mysqli_connect(HOST, USER, PASS, DB) or die('Error connect');
     $query = "SELECT * FROM uploads ORDER BY id DESC";
      $result = mysqli_query($dbc, $query);
  //eenmalige start echo
  while($row = mysqli_fetch_array($result)) {
$target = $row['image'];
$date = $row['datum'];
$username = $row['username'];
$description = $row['description'];

echo'<div class="uploadfield">
      <img src="https://img.clipartfox.com/fabe7b745287ecbebd9eb636c85383ea_download-this-image-as-clipart-of-profile-pic_600-557.png" class="uploaderpic">
    <h3>' . $username .'</h3>
    <img src= "' . $target . '" width="400px" height="400" text-align="center" >
    <h3> ' . $username .' : ' . $description .'</h3>


  </div>

';

}
  ?>

<!-- <div class="uploadfield">
    <img src="https://img.clipartfox.com/fabe7b745287ecbebd9eb636c85383ea_download-this-image-as-clipart-of-profile-pic_600-557.png" class="uploaderpic">
  <h3>Uploadername</h3>
  <img src="http://budapesttimes.hu/wp-content/themes/newsroom14/img/placeholder.png">
  <h3>Uploadtitle</h3>
  <p>Iemand: hi</p>
  <p>Iemand: hi</p>
  <p>Iemand: hi</p>
  <h3>Leave a comment:</h3>
  <textarea type="text" name="placecomment" placeholder="Nice post!" class="createcommentfield"></textarea>
</div>
<div class="uploadfield">
  <img src="https://img.clipartfox.com/fabe7b745287ecbebd9eb636c85383ea_download-this-image-as-clipart-of-profile-pic_600-557.png" class="uploaderpic">
  <h3>Uploadername</h3>
  <img src="http://budapesttimes.hu/wp-content/themes/newsroom14/img/placeholder.png" class="postpic">
  <h3>Uploadtitle</h3>
  <p>Iemand: hi</p>
  <p>Iemand: hi</p>
  <p>Iemand: hi</p>
  <h3>Leave a comment:</h3>
      <textarea type="text" name="placecomment" placeholder="Nice post!" class="createcommentfield"></textarea>
</div>
<div class="uploadfield">
  <img src="https://img.clipartfox.com/fabe7b745287ecbebd9eb636c85383ea_download-this-image-as-clipart-of-profile-pic_600-557.png" class="uploaderpic">
  <h3>Uploadername</h3>
  <img src="http://budapesttimes.hu/wp-content/themes/newsroom14/img/placeholder.png" class="postpic">
  <h3>Uploadtitle</h3>
  <p>Iemand: hi</p>
  <p>Iemand: hi</p>
  <p>Iemand: hi</p>
  <h3>Leave a comment:</h3>
    <textarea type="text" name="placecomment" placeholder="Nice post!" class="createcommentfield"></textarea>
</div>
<div class="uploadfield">
  <img src="https://img.clipartfox.com/fabe7b745287ecbebd9eb636c85383ea_download-this-image-as-clipart-of-profile-pic_600-557.png" class="uploaderpic">
  <h3>Uploadername</h3>
  <img src="http://budapesttimes.hu/wp-content/themes/newsroom14/img/placeholder.png" class="postpic">
  <h3>Uploadtitle</h3>
  <p>Iemand: hi</p>
  <p>Iemand: hi</p>
  <p>Iemand: hi</p>
  <h3>Leave a comment:</h3>
    <textarea type="text" name="placecomment" placeholder="Nice post!" class="createcommentfield"></textarea>
</div> -->
</div>
<footer>
<p><span class="2">Noah Falan</span> | instaclone</p>
</footer>

  </body>
</html>

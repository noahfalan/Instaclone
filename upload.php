<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>InstaClone</title>
</head>
<body>
<link rel="stylesheet" href="css/Upload.css">
    <img src="title.png" alt="Instaclone">
    <nav>
        <ul>
            <li><a href="index.php">H<span>ome</span></a></li>
            <li><a href="register.html">R<span>egister</span></a></li>
            <li><a href="login.html">L<span>ogin</span></a></li>
            <li><a href="#link">U<span>pload</span></a></li>
        </ul>
    </nav>

    <div class="registerfield">
    <h2>Upload your artwork</h2>
    <img src="http://www.freeiconspng.com/uploads/plus-icon-black-2.png" class="chosenpost"> <br>
    <form enctype="multipart/form-data" action="upload.php" method="post">
      <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1000000" > -->
      <!-- <input type="file" name="image" accept="image/jpeg" /><br> -->
      <input type="file" name="image" id="image" /><br>
      <label for="description">Omschrijving (max, 100 tekens)</label>
      <textarea name="description" id="description"></textarea>
      <input type="submit" name="submit" value="Upload">


    </form>
</div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";

    // Create connection
    $dbc = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";




    // include "config.php";
    if(isset($_POST['submit'])){
      // $dbc = mysqli_connect(localhost,  root, root, instaclone) or die('Error connect');
      // $description = mysqli_real_escape_string($dbc,htmlentities($_POST['description']));
      // $target = 'images/' . time() . $_FILES['image']['name'];
      // $filename = $_FILES['image']['name'];
      // $target = 'images/' . $filename;
      // echo $target . '<br>';
      // $temp = $_FILES['image']['tmp_name'];
      // echo $temp . '<br>';

      $uploadPath= 'images/';
      $uploadFile= $uploadPath . basename($FILES['image']['name']);


      $succes = move_uploaded_file($temp,$target);
      if (move_uploaded_file($_FILES['image']['name'], $uploadFile)) {
                // echo '<div class="goed"><i class="fa fa-check-square-o" aria-hidden="true"></i> Afbeelding geupload!</div>
                //       <script>document.getElementById("uploaden").style.border="3px solid #00CC00";</script>';
                //
                // $query = "INSERT INTO uploads VALUES('Uploader', '$target', NOW(), '$description')";
                // $result = mysqli_query($dbc, $query) or die("Er iets fout gegaan!");

                $imageName = $FILES['image']['name'];
                $fileName = $_POST['image'];
                $description = $_POST['description'];

                $query = "INSERT INTO uploads (image,description) VALUES ('$fileName','$description')";
                $result = mysqli_query($dbc, $query);
            } else {
              // echo '<div class="fout"><i class="fa fa-times" aria-hidden="true"></i> Bestand is te groot!</div>
              //       <script>document.getElementById("uploaden").style.border="3px solid #FF0000";</script>';
                    print_r($_FILES);
            }
      }



?>
  </body>
</html>

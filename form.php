<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <form action="/profile.php" method="post" enctype="multipart/form-data">
    <label for="firstname">Enter your name:</label>
    <input type="text" name="firstname" id="firstname">
    <label for="age">Enter your age:</label>
    <input type="text" name="age" id="age">
    <label for="location">Enter your location:</label>
    <input type="text" name="location" id="location">
    <label for="profilePictureUpload">Upload your profile picture:</label>
    <input type="file" name="profilePicture" id="profilePictureUpload">
    <button type="upload">Upload</button>
  </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST" ){ 
  if($_FILES['profilePicture']) {
    $uploadDir = 'public/uploads/';
    $uploadFile = $uploadDir . basename($_FILES['profilePicture']['name']);
    $extension = pathinfo($uploadFile, PATHINFO_EXTENSION);
    $autorizedExtensions = ['jpg', 'png', 'gif', 'webp'];
    $maxFileSize = 1000000;

    if(!in_array($extension, $autorizedExtensions)){
        $errors[] = 'File extension not allowed';
      }
    if( file_exists($_FILES['profilePicture']['tmp_name']) && $_FILES['profilePicture']['size'] > $maxFileSize){
        $errors[] = 'File must be less than 1M';
      }

    if(empty($errors)){
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $uploadFile);
        echo "<script>alert('File uploaded successfully');</script>";
      }
    }
} ?>

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
  <div class=profileContainer>
    <h2>Springfielder</h2>
    <figure>
      <img src="<?php echo $uploadFile ?>" alt="profile picture">
      <figcaption>
        <ul>
        <li>Firstname: <?php echo $_POST['firstname']; ?></li>
        <li>Age: <?php echo $_POST['age']; ?></li>
        <li>Location: <?php echo $_POST['location']; ?></li>
      </ul>
    </figcaption>
    </figure>
    
</div>

  </form>
</body>
</html>
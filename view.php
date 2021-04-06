<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Image Uploader</title>
  </head>

  <body>
 
    <?php $file_path = base64_decode($_GET['url']);?>
    <div class="container">
    <a href="images" class="btn btn-outline-secondary btn-md text-center">Go to Home</a>
    <a href="uploads/<?php echo $file_path;?>" download class="btn btn-secondary btn-md text-center">Download</a>
         <br>
      <div class="content">
          <img src="uploads/<?php echo $file_path; ?>" alt=""  width="100%" height="100%" class="image mt-2">


      </div>
    </div>


    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

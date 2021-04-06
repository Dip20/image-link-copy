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
    <!-- nav starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index">Image Uploader</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="images">Images</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- nav ends here -->
    <!-- body starts here -->
    <div class="container  mt-5" id="contex">
      <h1 class="text-center">Image Uploader</h1>
      <br><br><br>
      <form method="post" enctype="multipart/form-data" id="frmupload" action="php/uploader.php">
      <div class="row mb-2 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
            <div class="card shadow">
              <div class="card-body">
                <img src="img/undraw_image_upload_wqh3.svg" alt="" class="image-fluid " width="97%" id="profile_image">

              </div>
              <div class="card-footer">
                <button type="submit" name="upload-btn" class="btn btn-lg btn-primary btn-block d-none" id="upload-btn" onclick="submit">Upload</button>

              </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
            <label class="text-left"> Please Select File</label>
            <div class="custom-file">
              <input type="hidded" name="date" value="<?php echo date("dmY h:i:s a"); ?>">
              <input type="file" class="custom-file-input" id="customFile" onchange="loadFile(event)" name="file">
              <label class="custom-file-label" for="customFile">Choose file</label>
              <label class="d-none" id="uploading-status-lable">Uploading.....</label>
              <div class="progress d-none" id="uploading-status-bar">
                <div  class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>

    <!-- body Ends here -->
    <!-- footer here -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; Copyright Holder All Rights Reserved. </span>
      </div>
    </footer>
    <!-- footer ends here -->
    <!-- script -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="jquery.js"></script>
    <script>
      // function show preview image
        var loadFile = function(event)
        {
          var image = document.getElementById('profile_image');
          image.src = URL.createObjectURL(event.target.files[0]);
          $("#upload-btn").removeClass("d-none");

        };







          // $("#upload-btn").click(function(e){
          //   e.preventDefault();
          //
          //   $("#frmupload").on("submit",function(event){
          //
          //      var formData = new FormData(this);
          //
          //
          //   });
          //
          //      $.ajax({
          //        url:"php/uploader.php",
          //        type:"POST",
          //        data:formData,
          //
          //        success:function(res)
          //        {
          //          alert(res);
          //          // if (res=="0")
          //          // {
          //          //   swal("Faild to upload Image! ", "Maximum upload size is 2.5MB" ,"error");
          //          // }else if (res=="1")
          //          // {
          //          //   swal("Successfully uploaded. ", "" ,"success");
          //          //
          //          // }else if (res=="2")
          //          // {
          //          //   swal("Faild to upload Image! ", "Server Not Responding" ,"error");
          //          //
          //          // }else if (res=="3")
          //          // {
          //          //   swal("Only JPG,JPEG,PNG file are allowed for upload! ", "" ,"error");
          //          // }
          //
          //        },
          //        error: function (error)
          //        {
          //          alert("error");
          //        }
          //      });
          //
          //
          //
          // });
          //
          //
          //
          //
          //








        // upload function
      // function a()
      //   {
          // $('#upload-btn').on('click',function(e)
          //   {
          //    e.preventDefault();
          //
          //    var formData = new FormData(this);

             // submit data using ajax.
             // $.ajax({
             //   url:"php/uploader.php",
             //   type:"POST",
             //   data:formData,
             //   // dataType: "json",
             //
             //   beforeSend: function()
             //   {
             //    // before send..
             //      $("#upload-btn").html("Please Wait");
             //      $("#uploading-status-lable").removeClass("d-none");
             //      $("#uploading-status-bar").removeClass("d-none");
             //
             //    },
             //
             //   success:function (res)
             //   {
             //
             //     // setTimeout(function()
             //     //   {
             //         $("#uploading-status-lable").addClass("d-none");
             //         $("#uploading-status-bar").addClass("d-none");
             //         $("#upload-btn").html("Uploaded");
             //         // $("#contex").load("index.php #contex");
             //
             //         if (res=="0")
             //         {
             //           swal("Faild to upload Image! ", "Maximum upload size is 2.5MB" ,"error");
             //         }else if (res=="1")
             //         {
             //           swal("Successfully uploaded. ", "" ,"success");
             //
             //         }else if (res=="2")
             //         {
             //           swal("Faild to upload Image! ", "Server Not Responding" ,"error");
             //
             //         }else if (res=="3")
             //         {
             //           swal("Only JPG,JPEG,PNG file are allowed for upload! ", "" ,"error");
             //         }
             //
             //       // },1000);
             //
             //   }
             //
             //
             // });
          // });

        // }

    </script>




    <?php

    if (isset($_GET['status']))
    {
      $status = $_GET['status'];
      if ($status=="0")
       {
          echo '<script> swal("Faild to upload Image! ", "Maximum upload size is 2.5MB" ,"error");
          	setTimeout(myFunction, 1600); function myFunction(){window.location.href ="'.$_SERVER['PHP_SELF'].'";}</script>';
       }elseif ($status=="1")
       {
          echo '<script> swal("Successfully uploaded. ", "" ,"success");
          	setTimeout(myFunction, 1600); function myFunction(){window.location.href ="'.$_SERVER['PHP_SELF'].'";}</script>';

       }elseif ($status=="2")
       {
          echo '<script> swal("Faild to upload Image! ", "Server Not Responding" ,"error");
          	setTimeout(myFunction, 1600); function myFunction(){window.location.href ="'.$_SERVER['PHP_SELF'].'";}</script>';

       }elseif ($status=="3")
       {
          echo '<script> swal("Only JPG,JPEG,PNG file are allowed for upload! ", "" ,"error");
          	setTimeout(myFunction, 1600); function myFunction(){window.location.href ="'.$_SERVER['PHP_SELF'].'";}</script>';
       }
    }

 ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

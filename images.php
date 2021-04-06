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
    <title>Image Uploader  - Images</title>
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
          <li class="nav-item ">
            <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
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

          <?php
          require_once("php/connection.php");
          // query for view data
            $query1="SELECT * FROM tbl_upload";
            $run1=mysqli_query($conn,$query1);
            $num=mysqli_num_rows($run1);

           ?>

           <div class="container">
             <table class="table striped table-hover text-center">
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Filename</th>
                   <th>file_size</th>
                   <th>File</th>
                   <th>Action</th>

                 </tr>
               </thead>
              <tbody>
                <?php
                $count=0;
                if ($run1)
                 {
                   if ($num!=0)
                   {
                     while ($data=mysqli_fetch_assoc($run1))
                     {
                      $count+=1;//count serial no
                      $size_org=bin($data['file_size']);//bin function for binary conversion

                  ?>
                <tr>
                  <td><?php echo $count; ?></td>
                  <td><?php echo $data['filename']; ?></td>
                  <td><?php echo $size_org; ?></td>
                  <!-- <td><a href="view.php?url=uploads/<?php //echo $data['file_path']; ?>" target="_blank"> -->
                  <td>
          	      	<img src="uploads/<?php echo $data['file_path']; ?>" alt="" width="60px" height="60px" class="rounded-circle border"> </td>
                  <td><a href="view.php?url=<?php echo base64_encode($data['filename']); ?>" class="btn btn-sm btn-secondary mb-3">view</a>
                      <!-- <a href="delete.php?del_id=<?php //echo $data['id']; ?>&path=<?php //echo $data['file_path']; ?>&file_name=<?php //echo $data['filename']; ?>"
                        class="btn btn-sm btn-danger mb-3">Delete</a> -->
                  </td>
                </tr>
              </tbody>
          <?php } } } ?>

             </table>
             <br><hr>
             <div class="text text-center">
                <h4 class="text text-info">Total Records : <?php if ($num!=0) {echo $num;}else{echo "0 records";} ?></h4>
             </div>
           </div>

          <?php
          //byte to kb conversion
          function bin($b_size)
          {
            if ($b_size<1024)//byte
            {
              return  $size_org=number_format($b_size,2) . " Byte";

            }elseif ($b_size>=1024 AND $b_size<1048576) //kilobyte
            {
              return  $size_org=number_format(($b_size)/(1024),2) . " KB";

            }elseif ($b_size>=1048576)
            {
              return  $size_org=number_format(($b_size)/(1024)/(1024),2) . " MB";
            }

          }

           ?>

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
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

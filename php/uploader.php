<?php
    require_once("connection.php");
    require_once("function.php");
    $result = "";

  if (!empty($_FILES['file']))
  {
    //set files var....
    $type = $_FILES['file']['type'];
    $file_name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];


    //step a. check filesize................................

    if ($file_size>2621440 AND $file_size!=0)//2.5 MB are allowed(1024*1024*2.5=2621440)
    {

      // echo "0";
      redirect("../index?status=0");

    }else
    {

      if ($file_size!=0)
      {
        //step  b.check filetype................................
        $ext = pathinfo($file_name,PATHINFO_EXTENSION);

        if ($ext=="jpg" OR $ext=="png" OR $ext=="jpeg" OR $ext=="gif")
        {

          $dest = "../uploads/$file_name";
          $move = move_uploaded_file($temp_name ,$dest);

          if ($move)
          {
            // insert info in database....
            $sql = mysqli_query($conn,"INSERT INTO tbl_upload (filename,file_size,file_path) VALUES('$file_name','$file_size','$dest')");
            if ($sql)
            {
              $image_link_redirect = base64_encode($dest);
              // echo "1";
              redirect("../index?status=1&image-link=$image_link_redirect");

            }
            else
            {
              // echo "2";
              redirect("../index?status=2");

            }
          }
          else
          {
            // echo "2";
            redirect("../index?status=2");

          }
        }else
        {
          // echo "3";
          redirect("../index?status=3");

        }
      }
    }
  }else {
    redirect("../index?status=2");

  }



 ?>

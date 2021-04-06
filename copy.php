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
    <title>URL COPY</title>
  </head>
  <body>
  <body>



<?php $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>


    <div class="container text-center mt-5">
      <h3>Click button below to copy current url to clipboard with hidden input</h3>
      <input type="text" class="form-control"  id="query" value="<?php echo $url; ?>" readonly>
      <button class="btn-copy btn btn-primary btn-lg mt-3" onclick="copyToClipboard()">Copy</button>
    </div>
    <script>
      function copyToClipboard()
      {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($("#query").val()).select();
        document.execCommand("copy");
        $temp.remove();
      swal("Copied" , "Paste it anyware","success");
      }
    </script>
    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>

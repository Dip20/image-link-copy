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



       //redirect function
       function redirect($url)
       {
         echo "<script>window.location.href = '$url';</script>";
       }

?>

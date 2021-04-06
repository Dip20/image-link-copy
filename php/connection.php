<?php
date_default_timezone_set("Asia/kolkata");//set asia time
error_reporting(0);


$servername="localhost";
$username="root";
$password="";
$database="test2";

$conn=new mysqli($servername,$username,$password,$database);

if ($conn->connect_error){

  echo'<h4 style="color:red; text-align:center;">connect Error: ' . $conn->connect_error . '</h4>';
  //create error file
  $dt=date("d-m-Y h-i-s a");
  $err="$dt\n"."Error desc: " . $conn->connect_error . "\n";
  create_file("Error.txt",$err);

}
else {
//  echo "connected";
}



// function to create a error file
function create_file($filename,$msg)
{
  if (!file_exists($filename))
  {
    touch($filename);//create file
    $f=fopen($filename,"a+");
    fwrite($f,"**** Error Log ****\n");//write Defult message message..
    fclose($f);
  }

  if (file_exists($filename))
  {
    $f=fopen($filename,"a+");
    fwrite($f,$msg);//write message..
    fclose($f);
  }
}


 ?>

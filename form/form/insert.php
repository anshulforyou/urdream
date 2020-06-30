<?php

      $con = mysqli_connect('127.0.0.1','root','');

      if(!$con){
  echo 'Not connected to server';
         }

         if(!mysqli_select_db($con,'registrations')){
  echo "Data Base is not connected";
          }
  $FullName = filter_input(INPUT_POST, 'FullName');
$Email = filter_input(INPUT_POST, 'Email');
$Phone = filter_input(INPUT_POST, 'Phone');
$Gender = filter_input(INPUT_POST, 'Gender');
$City = filter_input(INPUT_POST, 'City');


  $sql = "INSERT INTO details(FullName,Email,Phone,Gender,City) VALUES ('$FullName','$Email','$Phone','$Gender','$City')";
  if(!mysqli_query($con, $sql))
  {
    echo "Not Connected";
  }
else
{
  echo "Inserted";
}

header("refresh:2; url=registration.html");

?>
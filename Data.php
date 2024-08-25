<?php 
  
  $name = $_REQUEST['sname'];
  $email = $_REQUEST['semail'];
  $dateofbirth = $_REQUEST['d'];
  $gender = $_REQUEST['g'];
  $hobby = implode(",",$_REQUEST['hobby']);
  $country = $_REQUEST['country'];

  // connection

$con = mysqli_connect("jdbc:mysql://localhost:3306", "root", "Sumit97!@#" "college");

 //QUERY

 $"insert into form(name,email,gender,hobby, city)
 value('$name','$email','$dateofbirth','$gender','$hobby','$city')";

 //Execution

 mysqli_query($con,$que)
 

?>


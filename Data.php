<?php 
  
  $name = $_REQUEST['sname'];
  $gender = $_REQUEST['g'];
  $hobby = implode(",",$_REQUEST['hobby']);
  $country = $_REQUEST['country'];
  $msg = $_REQUEST['msg'];

//   echo $name."<br/>";
//   echo $gender."<br/>";
//   echo $hobby."<br/>";
//   echo $country."<br/>";
//   echo $msg;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="Form.html">New Entry</a>

<table align="center" bgcolor="skyblue" cellpadding="10px">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo $gender; ?></td>
    </tr>
    <tr>
        <td>Hobby</td>
        <td><?php echo $hobby; ?></td>
    </tr>
    <tr>
        <td>Country</td>
        <td><?php echo $country; ?></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><?php echo $msg; ?></td>
    </tr>
</table>
    
</body>
</html>
<?php
if(isset($_POST['user'])){
    echo "<script> window.location.href='Logout.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to :<?= $_SESSION['user']; ?> </h1>
    <a href="Logout.php">Logout</a>
</body>
</html>



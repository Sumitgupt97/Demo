<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       if(isset($_POST['login'])){
        $u="Ram";
        $p=1234;

        $username=$_POST['uname'];
        $password=$_POST['pwd'];

        if($username==$u && $password == $p){
            session_start();
            $_SESSION['user']=$username;
            echo " <script> window.location.href='Dasebord.php';</script>";
        }
        else{
            echo"worng username & password";
        }

       }
    ?>
    <form action="" method="post">
        <input type="test" name="uname" placeholder="Enter the username" value="<?=@$_cookie['username']">
        <input type="password" name="pwd" placeholder="Enter thr password"> 

        <input type="submit" name="login" value="Login">

    </form>
</body>
</html>
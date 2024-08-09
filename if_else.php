<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      if(isset($_post['checkage'])){
        $age= $_post['age'];

        if($age>=18){
            echo" you can vote";
        }
        else{
            echo" youn can not vote";
        }
      }
      

    ?>
    <form action="" method="post">
        <input type="text" name="age">
        <input type=" submit" name="checkage" value=" check Age">
    </form>

</body>
</html>
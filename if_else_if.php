<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
     if(isset($_POST['check'])){
      $amount=$_POST['amount'];

      if($amount>50 && $amount<=500){
        echo" you got 5% discount";
      }
      elseif($amount>500 &&$amount<=1000){
        echo" you got 10% discount";
      }
      elseif($amount>1000){
        echo"you got 20% discount";
      }
      else{
        echo" sorry no for you but purches highg amount thanku";
      }

     }

      ?>
      <form action="" method="post">
        <input type="text" name=" amount">
        <input type ="submit" name="check" value="chech discount">

    </form>
    
</body>
</html>
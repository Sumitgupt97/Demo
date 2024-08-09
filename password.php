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
        $dbpass=1111;
        $current=$_POST['current'];
        $newpass=$_POST['newpass'];
        $conpass=$_POST['conpass'];

        if($current==$dbpass){

            if($newpass! = $current && $conpass! = $current){
              
                if($newpass==$conpass){
                    $dbpass=$newpass;
                    echo"you password change succesfull -".$dbpass
                }
                else{
                    echo"new and conform shoud be same";
                }
                

            }
            else{
                echo"new and current shoud be different from current password";
            }
        
      }
      else{
        echo"current password is wrong";
      }
         
    }

    ?>
    <form action="" method="post">
      <input type="text" name="current"></br>
      <input type="text" name="newpass"></br>
      <input type="text" name="conpass"></br>
      <input type="sublit" name="check" value="save">

   </form>
    
    
</body>
</html>
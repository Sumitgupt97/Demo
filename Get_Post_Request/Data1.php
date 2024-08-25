
<?php 
      $name = $_POST['sname'];
      $email = $_POST['semail'];
      $dateofbirth = $_POST['dateofbirth'];

      $gender = $_POST['g'];
      $hobby = implode(',',$_POST['hobby']);
      $city = $_POST['city']; 

      // Connection 
       $con= mysqli_connect('localhost:3306','root','Sumit97!@#','college');
      // Query 
        $qry="insert into form(name,email,dateofbirth,gender,hobby,city)
        values('$name','$email','$dateofbirth', '$gender','$hobby','$city')";
      // Execution 

        $rs = mysqli_query($con,$qry);
        
        if($rs>0)
        {
            $msg = "Thank you for registing with us.";
        }
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive" >
                <a href="AddComputer.php" class="btn btn-info ">New Entry</a>
                 <table class="table table-border bg-primary" >
                    <tr>
                        <th>SNO.</th>
                        <th>Computer Name</th>
                        <th>IP</th>
                        <th>Processor</th>
                        <th>HDD</th>
                        <th>SSD</th>
                        <th>RAM</th>
                        <th>Keyboard + Mouse</th>
                        <th>Extra</th>
                        <th>CollegeName</th>
                        <th>Software</th>
                        <th>problem</th>
                        <th>Action</th>
                    </tr>
                    <?php
                      // connection
                      include('connection.php');

                      //query

                      $qry="select * from computer where delstatus=1";

                      //Exection
                      $ex=mysqli_query($con,$qry);

                   

                      //fetch- is associative array
                      while($data=mysqli_fetch_array($ex))
                        { 
                             
                       ?>    
                            <tr>
                                <td><?= $data['id']; ?></td>
                                <td><?= $data['computer_name']; ?></td>
                                <td><?= $data['address']; ?></td>
                                <td><?= $data['processor']; ?></td>
                                <td><?= $data['hdd']; ?></td>
                                <td><?= $data['ssd']; ?></td>
                                <td><?= $data['ram']; ?></td>
                                <td><?= $data['keyboard']; ?></td>
                                <td><?= $data['extra']; ?></td>
                                <td><?= $data['collegename']; ?></td>
                                <td><?= $data['location']; ?></td>
                                <td><?= $data['software']; ?></td>
                                <td><?= $data['problem']; ?></td>
                                <td>
                            <a href="delete.php?id=<?=$data['id'];?>"
                                onClick="return confirm('Are you sure to delete');" class="btn btn-danger">Delete</a>
                        </td>

                        <a href="edit.php?id=<?=$data['id'];?>"
                                onClick="return confirm('Are you sure to edit');" class="btn btn-danger">Edit</a>
                        </td>

                               
                            </tr>
                       <?php
                        }
                       ?>
                       
                 </table>

            </div>
        </div>

    </div>
   

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>
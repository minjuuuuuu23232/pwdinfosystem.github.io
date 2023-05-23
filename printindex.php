<?php
    require 'connection.php';
    include('checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style type="text/css" media="print">
    @media print{
        .noprint, .noprint *{
            display: none; !important;
        }
    }
</style>

    <title>Persons With Disabilities Information System</title>
  </head>
  <body onload="print()">
  <div class="container mt-2">
    <center>
    <h3 style="margin-top: 30px;">Persons With Disabilities List</h3>
    </center>
    <div class="row">
        <div class="col-md-12">
            <div class="text-end mt-3">
                <div class="card mt-1">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date Registered</th>
                                    <th>Full Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Barangay</th>
                                    <th>Contact #</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $get_master_list = mysqli_query($conn, "SELECT * FROM pwd_info");

                                while($row = mysqli_fetch_array($get_master_list)){
                                    
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['join_date']; ?></td>
                                    <td><?php
                                        echo $row['lastname'] . ', ';
                                        echo $row['firstname'] . ' ';
                                        echo substr($row['middlename'], 0, 1);
                                    ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['barangay']; ?></td>
                                    <td><?php echo $row['emergencycontact']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <button type="" class="btn btn-info noprint" style="width:100%" onclick="window.location.replace('index.php')">Back</button>
</div>
    
</body>
</html>
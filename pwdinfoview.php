<?php
    require 'connection.php';
    include('checklogin.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PWD Info</title>
  </head>
  <body>

  <div class="container mt-5">
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card mx-auto" style="max-width: 900px;">
                <div class="card-header">
                    <h4>PWD Info
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php 
                        if(isset($_GET['id']))
                        {   
                            $pwd_id = mysqli_real_escape_string($conn, $_GET['id']); 
                            $query = "SELECT * FROM pwd_info WHERE id='$pwd_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $pwd = mysqli_fetch_array($query_run);
                    ?>

                    <form action="functions.php" method="POST">
                        <input type="hidden" name="pwd_id" value="<?php echo $pwd['id']; ?>">
                        <div class="row mb-3">
                            <div class="col-md-4 offset-md-9">
                                <div class="mb-3 input-group">
                                    <?php
                                    $photoPath = 'uploads/' . $pwd['photo'];
                                    if (file_exists($photoPath)) {
                                        echo '<img src="' . $photoPath . '" alt="Uploaded Photo" style="max-width: 55%; max-height: 55%;">';
                                    } else {
                                        echo 'No photo available';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1">
                        <div class="row mb-3">
                            <div class="col-md-4" >
                                <div class="mb-3 input-group">
                                    <label for="firstname"><strong>First Name</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['firstname']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="middlename"><strong>Middle Name</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['middlename']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="lastname"><strong>Last Name</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['lastname']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="gender"><strong>Sex</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['gender']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="birthdate"><strong>Age</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['age']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="birthdate"><strong>Birthdate</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['birthdate']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="birthplace"><strong>Birthplace</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['birthplace']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="barangay"><strong>Barangay Address</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['barangay']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="purok"><strong>Purok Address</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['purok']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="contactinfo"><strong>Contact No.</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['contactinfo']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="bloodtype"><strong>Blood Type</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['bloodtype']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="disabilitytype"><strong>Disability Type</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['disabilitytype']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="philhealth"><strong>PhilHealth No.</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['philhealth']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="statusemployment"><strong>Status of Employment</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['statusemployment']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="occupation"><strong>Occupation</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['occupation']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="emergencycontact"><strong>Emergency Contact Person No.</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['emergencycontact']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="relationshipcontact"><strong>Relationship to Contact Person No.</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['relationshipcontact']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 input-group">
                                    <label for="addresscontact"><strong>Emergency Contact Address</strong></label>
                                    <p style="width: 100%;">
                                        <?php echo $pwd['addresscontact']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="remarks" class="form-label"><strong>Remarks</strong></span></label>
                                <p style="width: 100%;">
                                        <?php echo $pwd['remarks']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-12">
                                <div class="text-end">
                                    <a href="printinfo.php?id=<?php echo $pwd['id']; ?>" class="btn btn-secondary" style="margin-right: 20px;">Print Info</a>
                                    <button type="submit" name="save_info" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                            }
                            else {
                                echo "<h6>No Record Found.</h6>";
                            }
                        }
                        else {
                            echo "<h6>Error: No ID.</h6>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

                    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
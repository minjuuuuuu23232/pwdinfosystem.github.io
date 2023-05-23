<?php
    require 'connection.php';
    include('checklogin.php');
?>

<!doctype html>
<html lang="en">
  <head>

  <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button{
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PWD Add Info</title>
  </head>
  <body>

  <div class="container mt-5">

  <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card mx-auto" style="max-width: 940px;">
                <div class="card-header">
                    <h4>Edit PWD Info
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php 

/* kani diri nga part kay magkuha napd siya og info sa phpmyadmin  database para
mailhan nimo nga unsa dapat ang e edit sa info para dili mag balik balik ang info nga imong 
ibutang basin malimot ang user */

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
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="firstname">First Name <span class="text-danger">*</span> </label>
                                <input type="text" name="firstname" value="<?php echo $pwd['firstname']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="middlename">Middle Name <span class="text-danger">*</span> </label>
                                <input type="text" name="middlename" value="<?php echo $pwd['middlename']; ?>"  class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="lastname">Last Name <span class="text-danger">*</span> </label>
                                <input type="text" name="lastname" value="<?php echo $pwd['lastname']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="gender">Sex <span class="text-danger">*</span> </label>
                                <select class="form-select" name="gender" style="width: 100%;" required>
                                    <option <?php if ($pwd['gender'] === 'Male') echo 'selected'; ?>>Male</option>
                                    <option <?php if ($pwd['gender'] === 'Female') echo 'selected'; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="age">Age <span class="text-danger">*</span> </label>
                                <input type="number" name="age" value="<?php echo $pwd['age']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="birthdate">Birthdate <span class="text-danger">*</span> </label>
                                <input type="date" name="birthdate" value="<?php echo $pwd['birthdate']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="birthplace">Birthplace <span class="text-danger">*</span> </label>
                                <input type="text" name="birthplace" value="<?php echo $pwd['birthplace']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="mb-3 input-group">
                            <label for="barangay">Barangay Address <span class="text-danger">*</span></label>
                            <select class="form-select" name="barangay" style="width: 100%;" required>
                                <option <?php if ($pwd['barangay'] == 'Abuno') echo 'selected'; ?>>Abuno</option>
                                <option <?php if ($pwd['barangay'] == 'Acmac-Mariano Badelles Sr.') echo 'selected'; ?>>Acmac-Mariano Badelles Sr.</option>
                                <option <?php if ($pwd['barangay'] == 'Bagong Silang') echo 'selected'; ?>>Bagong Silang</option>
                                <option <?php if ($pwd['barangay'] == 'Bonbonon') echo 'selected'; ?>>Bonbonon</option>
                                <option <?php if ($pwd['barangay'] == 'Bunawan') echo 'selected'; ?>>Bunawan</option>
                                <option <?php if ($pwd['barangay'] == 'Buru-un') echo 'selected'; ?>>Buru-un</option>
                                <option <?php if ($pwd['barangay'] == 'Dalipuga') echo 'selected'; ?>>Dalipuga</option>
                                <option <?php if ($pwd['barangay'] == 'Del Carmen') echo 'selected'; ?>>Del Carmen</option>
                                <option <?php if ($pwd['barangay'] == 'Digkilaan') echo 'selected'; ?>>Digkilaan</option>
                                <option <?php if ($pwd['barangay'] == 'Ditucalan') echo 'selected'; ?>>Ditucalan</option>
                                <option <?php if ($pwd['barangay'] == 'Dulag') echo 'selected'; ?>>Dulag</option>
                                <option <?php if ($pwd['barangay'] == 'Hinaplanon') echo 'selected'; ?>>Hinaplanon</option>
                                <option <?php if ($pwd['barangay'] == 'Hindang') echo 'selected'; ?>>Hindang</option>
                                <option <?php if ($pwd['barangay'] == 'Kabacsanan') echo 'selected'; ?>>Kabacsanan</option>
                                <option <?php if ($pwd['barangay'] == 'Kalilangan') echo 'selected'; ?>>Kalilangan</option>
                                <option <?php if ($pwd['barangay'] == 'Kiwalan') echo 'selected'; ?>>Kiwalan</option>
                                <option <?php if ($pwd['barangay'] == 'Lanipao') echo 'selected'; ?>>Lanipao</option>
                                <option <?php if ($pwd['barangay'] == 'Luinab') echo 'selected'; ?>>Luinab</option>
                                <option <?php if ($pwd['barangay'] == 'Mahayahay') echo 'selected'; ?>>Mahayahay</option>
                                <option <?php if ($pwd['barangay'] == 'Mainit') echo 'selected'; ?>>Mainit</option>
                                <option <?php if ($pwd['barangay'] == 'Mandulog') echo 'selected'; ?>>Mandulog</option>
                                <option <?php if ($pwd['barangay'] == 'Maria Cristina') echo 'selected'; ?>>Maria Cristina</option>
                                <option <?php if ($pwd['barangay'] == 'Pala-o') echo 'selected'; ?>>Pala-o</option>
                                <option <?php if ($pwd['barangay'] == 'Panoroganan') echo 'selected'; ?>>Panoroganan</option>
                                <option <?php if ($pwd['barangay'] == 'Poblacion') echo 'selected'; ?>>Poblacion</option>
                                <option <?php if ($pwd['barangay'] == 'Puga-an') echo 'selected'; ?>>Puga-an</option>
                                <option <?php if ($pwd['barangay'] == 'Rogongon') echo 'selected'; ?>>Rogongon</option>
                                <option <?php if ($pwd['barangay'] == 'San Miguel') echo 'selected'; ?>>San Miguel</option>
                                <option <?php if ($pwd['barangay'] == 'San Roque') echo 'selected'; ?>>San Roque</option>
                                <option <?php if ($pwd['barangay'] == 'Santa Elena') echo 'selected'; ?>>Santa Elena</option>
                                <option <?php if ($pwd['barangay'] == 'Santa Filomena') echo 'selected'; ?>>Santa Filomena</option>
                                <option <?php if ($pwd['barangay'] == 'Santiago') echo 'selected'; ?>>Santiago</option>
                                <option <?php if ($pwd['barangay'] == 'Santo Rosario') echo 'selected'; ?>>Santo Rosario</option>
                                <option <?php if ($pwd['barangay'] == 'Saray') echo 'selected'; ?>>Saray</option>
                                <option <?php if ($pwd['barangay'] == 'Suarez') echo 'selected'; ?>>Suarez</option>
                                <option <?php if ($pwd['barangay'] == 'Tambacan') echo 'selected'; ?>>Tambacan</option>
                                <option <?php if ($pwd['barangay'] == 'Tibanga') echo 'selected'; ?>>Tibanga</option>
                                <option <?php if ($pwd['barangay'] == 'Tipanoy') echo 'selected'; ?>>Tipanoy</option>
                                <option <?php if ($pwd['barangay'] == 'Tomas L. Cabili (Tominobo Proper)') echo 'selected'; ?>>Tomas L. Cabili (Tominobo Proper)</option>
                                <option <?php if ($pwd['barangay'] == 'Tominobo Upper') echo 'selected'; ?>>Tominobo Upper</option>
                                <option <?php if ($pwd['barangay'] == 'Tubod') echo 'selected'; ?>>Tubod</option>
                                <option <?php if ($pwd['barangay'] == 'Ubaldo Laya') echo 'selected'; ?>>Ubaldo Laya</option>
                                <option <?php if ($pwd['barangay'] == 'Upper Hinaplanon') echo 'selected'; ?>>Upper Hinaplanon</option>
                                <option <?php if ($pwd['barangay'] == 'Villa Verde') echo 'selected'; ?>>Villa Verde</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="purok">Purok Address <span class="text-danger">*</span> </label>
                                <input type="text" name="purok" value="<?php echo $pwd['purok']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="contactinfo">Contact No. (Optional) <span class="text-danger">*</span> </label>
                                <input type="text" name="contactinfo" value="<?php echo $pwd['contactinfo']; ?>" class="form-control" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="bloodtype">Blood Type <span class="text-danger">*</span></label>
                                <select class="form-select" name="bloodtype" style="width: 100%;" required>
                                    <option <?php if ($pwd['bloodtype'] == 'A+') echo 'selected'; ?>>A+</option>
                                    <option <?php if ($pwd['bloodtype'] == 'A-') echo 'selected'; ?>>A-</option>
                                    <option <?php if ($pwd['bloodtype'] == 'B+') echo 'selected'; ?>>B+</option>
                                    <option <?php if ($pwd['bloodtype'] == 'B-') echo 'selected'; ?>>B-</option>
                                    <option <?php if ($pwd['bloodtype'] == 'O+') echo 'selected'; ?>>O+</option>
                                    <option <?php if ($pwd['bloodtype'] == 'O-') echo 'selected'; ?>>O-</option>
                                    <option <?php if ($pwd['bloodtype'] == 'AB+') echo 'selected'; ?>>AB+</option>
                                    <option <?php if ($pwd['bloodtype'] == 'AB-') echo 'selected'; ?>>AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="disabilitytype">Disability Type <span class="text-danger">*</span> </label>
                                <select class="form-select" name="disabilitytype" style="width: 100%;" required>
                                    <option <?php if ($pwd['disabilitytype'] == 'Deaf or hard of hearing') echo 'selected'; ?>>Deaf or hard of hearing</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Intellectual Disability') echo 'selected'; ?>>Intellectual Disability</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Learning disability') echo 'selected'; ?>>Learning disability</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Mental disability') echo 'selected'; ?>>Mental disability</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Physical disability (Orthopedic)') echo 'selected'; ?>>Physical disability (Orthopedic)</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Psychosocial disability') echo 'selected'; ?>>Psychosocial disability</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Speech and language impairment') echo 'selected'; ?>>Speech and language impairment</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Visual disability') echo 'selected'; ?>>Visual disability</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Cancer') echo 'selected'; ?>>Cancer</option>
                                    <option <?php if ($pwd['disabilitytype'] == 'Rare disease') echo 'selected'; ?>>Rare disease</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="philhealth">PhilHealth No. (Optional) <span class="text-danger">*</span> </label>
                                <input type="text" name="philhealth" value="<?php echo $pwd['philhealth']; ?>" class="form-control" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="statusemployment">Status of Employment <span class="text-danger">*</span> </label>
                                <select class="form-select" name="statusemployment" style="width: 100%;" required>
                                    <option <?php if ($pwd['statusemployment'] === 'Employed') echo 'selected'; ?>>Employed</option>
                                    <option <?php if ($pwd['statusemployment'] === 'Unemployed') echo 'selected'; ?>>Unemployed</option>
                                    <option <?php if ($pwd['statusemployment'] === 'Self-employed') echo 'selected'; ?>>Self-employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="occupation">Occupation (Optional) <span class="text-danger">*</span> </label>
                                <input type="text" name="occupation" value="<?php echo $pwd['occupation']; ?>" class="form-control" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="emergencycontact">Emergency Contact Person No. <span class="text-danger">*</span> </label>
                                <input type="number" name="emergencycontact" value="<?php echo $pwd['emergencycontact']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="relationshipcontact">Relationship to Contact Person No. <span class="text-danger">*</span> </label>
                                <input type="number" name="relationshipcontact" value="<?php echo $pwd['relationshipcontact']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="addresscontact">Emergency Contact Address <span class="text-danger">*</span> </label>
                                <input type="text" name="addresscontact" value="<?php echo $pwd['addresscontact']; ?>" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="mb-3 input-group">
                            <label for="photo">Add PWD Photo <span class="text-danger">*</span> </label>
                            <input type="file" name="photo"  class="form-control" style="width: 100%;" required>
                        </div>
                    </div>
                <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="remarks" class="form-label">Remarks <span class="text-danger">*</span></label>
                                <textarea name="remarks" placeholder="Please type remarks about the PWD" class="form-control" rows="4" required><?php echo $pwd['remarks']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="text-end">
                                <button type="submit" name="update_info" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                        
                    <?php
                        }
                            else
                        {
                                echo "<h4>No ID Found</h4>";
                            }
                        }
                    ?>
                    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
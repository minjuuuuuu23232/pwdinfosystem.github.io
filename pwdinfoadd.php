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
                <h4>Add PWD Info
                    <a href="index.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="functions.php" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="firstname">First Name <span class="text-danger">*</span> </label>
                                <input type="text" name="firstname" placeholder="Please type pwd first name." class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="middlename">Middle Name <span class="text-danger">*</span> </label>
                                <input type="text" name="middlename" placeholder="Please type pwd middle name." class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="lastname">Last Name <span class="text-danger">*</span> </label>
                                <input type="text" name="lastname" placeholder="Please type pwd last name." class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="gender">Sex <span class="text-danger">*</span> </label>
                                <select class="form-select" name="gender" style="width: 100%;" required>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="age">Age <span class="text-danger">*</span> </label>
                                <input type="number" name="age" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="birthdate">Birthdate <span class="text-danger">*</span> </label>
                                <input type="date" name="birthdate" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="birthplace">Birthplace <span class="text-danger">*</span> </label>
                                <input type="text" name="birthplace" placeholder="Please enter pwd birthplace." class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="barangay">Barangay Address <span class="text-danger">*</span> </label>
                                <select class="form-select" name="barangay" style="width: 100%;" required>
                                    <option>Abuno</option>
                                    <option>Acmac-Mariano Badelles Sr.</option>
                                    <option>Bagong Silang</option>
                                    <option>Bonbonon</option>
                                    <option>Bunawan</option>
                                    <option>Buru-un</option>
                                    <option>Dalipuga</option>
                                    <option>Del Carmen</option>
                                    <option>Digkilaan</option>
                                    <option>Ditucalan</option>
                                    <option>Dulag</option>
                                    <option>Hinaplanon</option>
                                    <option>Hindang</option>
                                    <option>Kabacsanan</option>
                                    <option>Kalilangan</option>
                                    <option>Kiwalan</option>
                                    <option>Lanipao</option>
                                    <option>Luinab</option>
                                    <option>Mahayahay</option>
                                    <option>Mainit</option>
                                    <option>Mandulog</option>
                                    <option>Maria Cristina</option>
                                    <option>Pala-o</option>
                                    <option>Panoroganan</option>
                                    <option>Poblacion</option>
                                    <option>Puga-an</option>
                                    <option>Rogongon</option>
                                    <option>San Miguel</option>
                                    <option>San Roque</option>
                                    <option>Santa Elena</option>
                                    <option>Santa Filomena</option>
                                    <option>Santiago</option>
                                    <option>Santo Rosario</option>
                                    <option>Saray</option>
                                    <option>Suarez</option>
                                    <option>Tambacan</option>
                                    <option>Tibanga</option>
                                    <option>Tipanoy</option>
                                    <option>Tomas L. Cabili (Tominobo Proper)</option>
                                    <option>Tominobo Upper</option>
                                    <option>Tubod</option>
                                    <option>Ubaldo Laya</option>
                                    <option>Upper Hinaplanon</option>
                                    <option>Villa Verde</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="purok">Purok Address <span class="text-danger">*</span> </label>
                                <input type="text" name="purok" placeholder="Please type pwd purok address." class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="contactinfo">Contact No. (Optional) <span class="text-danger">*</span> </label>
                                <input type="text" name="contactinfo" placeholder="Type N/A if none." class="form-control" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="bloodtype">Blood Type <span class="text-danger">*</span> </label>
                                <select class="form-select" name="bloodtype" style="width: 100%;" required>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="disabilitytype">Disability Type <span class="text-danger">*</span> </label>
                                <select class="form-select" name="disabilitytype" style="width: 100%;" required>
                                        <option>Deaf or hard of hearing</option>
                                        <option>Intellectual Disability</option>
                                        <option>Learning disability</option>
                                        <option>Mental disability</option>
                                        <option>Physical disability (Orthopedic)</option>
                                        <option>Psychosocial disability</option>
                                        <option>Speech and language impairment</option>
                                        <option>Visual disability</option>
                                        <option>Cancer</option>
                                        <option>Rare disease</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="philhealth">PhilHealth No. (Optional) <span class="text-danger">*</span> </label>
                                <input type="text" name="philhealth" placeholder="Type N/A if none." class="form-control" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="statusemployment">Status of Employment <span class="text-danger">*</span> </label>
                                <select class="form-select" name="statusemployment" style="width: 100%;" required>
                                        <option>Employed</option>
                                        <option>Unemployed</option>
                                        <option>Self-employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="occupation">Occupation (Optional) <span class="text-danger">*</span> </label>
                                <input type="text" name="occupation" placeholder="Type N/A if none." class="form-control" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="emergencycontact">Emergency Contact Person No. <span class="text-danger">*</span> </label>
                                <input type="number" name="emergencycontact" placeholder="Please type pwd emergency contact no." class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="relationcontact">Relationship to Contact Person No. <span class="text-danger">*</span> </label>
                                <input type="number" name="relationshipcontact" placeholder="Please type pwd relationship contact no." class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 input-group">
                                <label for="addresscontact">Emergency Contact Address <span class="text-danger">*</span> </label>
                                <input type="text" name="addresscontact" placeholder="Please type pwd emergency contact address" class="form-control" style="width: 100%;" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="mb-3 input-group">
                            <label for="photo">Add PWD Photo<span class="text-danger">*</span> </label>
                            <input type="file" name="photo" class="form-control" style="width: 100%;">
                        </div>
                    </div>
                <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="remarks" class="form-label">Remarks <span class="text-danger">*</span></label>
                                <textarea name="remarks" placeholder="Please type remarks about the PWD" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="text-end">
                                <button type="submit" name="save_info" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
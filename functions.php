<?php

/* kani nga code tanan is function ni siya sa mga button sa system */

    require 'connection.php';



/* kani nga code kay para ni sa update info button sa main.php para if e click and update button is 
pwede nimo ma update ang info sa pwd */

    if (isset($_POST['update_info']))
     {
        $pwd_id = mysqli_real_escape_string($conn, $_POST['pwd_id']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
        $purok = mysqli_real_escape_string($conn, $_POST['purok']);
        $contactinfo = mysqli_real_escape_string($conn, $_POST['contactinfo']);
        $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
        $birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
        $bloodtype = mysqli_real_escape_string($conn, $_POST['bloodtype']);
        $disabilitytype = mysqli_real_escape_string($conn, $_POST['disabilitytype']);
        $philhealth = mysqli_real_escape_string($conn, $_POST['philhealth']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $statusemployment = mysqli_real_escape_string($conn, $_POST['statusemployment']);
        $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
        $emergencycontact = mysqli_real_escape_string($conn, $_POST['emergencycontact']);
        $relationshipcontact = mysqli_real_escape_string($conn, $_POST['relationshipcontact']);
        $addresscontact = mysqli_real_escape_string($conn, $_POST['addresscontact']);
        $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

        $query = "UPDATE pwd_info SET firstname='$firstname', middlename='$middlename', lastname='$lastname', age='$age', barangay='$barangay', purok='$purok', 
        contactinfo='$contactinfo', birthdate='$birthdate', birthplace='$birthplace', bloodtype='$bloodtype', disabilitytype='$disabilitytype',
        philhealth='$philhealth', gender='$gender', statusemployment='$statusemployment', occupation='$occupation', emergencycontact='$emergencycontact',
        relationshipcontact='$relationshipcontact', addresscontact='$addresscontact', remarks='$remarks' WHERE id='$pwd_id'";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['message'] = "Successfully Edited The PWD Information";
            header("Location: index.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Failed To Edit the PWD Information";
            header("Location: pwdedit.php");
            exit(0);
        }
    }

/* kani nga code kay para ni sa save info button sa pwdinfoadd.php  para if e click nimo ang save info button 
kay ma save nimong info nga imong ge add tapos mabutang siya sa database og mabutang sa main.php ang info */

if (isset($_POST['save_info'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
    $purok = mysqli_real_escape_string($conn, $_POST['purok']);
    $contactinfo = mysqli_real_escape_string($conn, $_POST['contactinfo']);
    $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
    $birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
    $bloodtype = mysqli_real_escape_string($conn, $_POST['bloodtype']);
    $disabilitytype = mysqli_real_escape_string($conn, $_POST['disabilitytype']);
    $philhealth = mysqli_real_escape_string($conn, $_POST['philhealth']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $statusemployment = mysqli_real_escape_string($conn, $_POST['statusemployment']);
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
    $emergencycontact = mysqli_real_escape_string($conn, $_POST['emergencycontact']);
    $relationshipcontact = mysqli_real_escape_string($conn, $_POST['relationshipcontact']);
    $addresscontact = mysqli_real_escape_string($conn, $_POST['addresscontact']);
    $photo = mysqli_real_escape_string($conn, $_POST['photo']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

// kami diri nga part is para ni sa image upload 
    $targetDir = "uploads/";
    $fileName = $_FILES['photo']['name'];
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // mga formats nga allowed 
    $allowedTypes = array('jpg', 'jpeg', 'png');
    if (in_array($fileType, $allowedTypes)) {
        // pang move sa images sa file directory
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath)) {

            $query = "INSERT INTO pwd_info (firstname, middlename, lastname, age, barangay, purok, contactinfo, birthdate, birthplace, bloodtype, 
            disabilitytype, philhealth, gender, statusemployment, occupation, emergencycontact, relationshipcontact, addresscontact, remarks, photo) VALUES
            ('$firstname', '$middlename', '$lastname', '$age', '$barangay', '$purok', '$contactinfo', '$birthdate', '$birthplace', '$bloodtype',
            '$disabilitytype', '$philhealth', '$gender', '$statusemployment', '$occupation', '$emergencycontact', '$relationshipcontact', '$addresscontact', 
            '$remarks', '$fileName')";

            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                $_SESSION['message'] = "PWD Info Added Successfully";
                header("Location: index.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Failed To Add PWD Info";
                header("Location: pwdinfoadd.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Failed to upload photo";
            header("Location: pwdinfoadd.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Invalid file format. Only JPG, JPEG, and PNG files are allowed.";
        header("Location: pwdinfoadd.php");
        exit(0);
    }
}

?>

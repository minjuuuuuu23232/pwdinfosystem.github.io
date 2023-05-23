<?php
    require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Information System</title>
    <link rel="stylesheet" type="text/css" href="PWDSTYLES.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="" method="post">
            <?php if (isset($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
         <div class="txt_field">
             <input type="password" name="password" required>
             <span></span>
            <label>Password</label>
         </div>
         <input type="submit" name="login" value="Login">
         </div>
        </form>
    </div>
</body>
</html>

<?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username; 
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Invalid username or password. Please try again.";
            echo "<script>alert('$error_message');</script>";
        }
    }
?>


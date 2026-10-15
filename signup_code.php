<?php
include __DIR__ . ('/includes/config.php');

if (isset($_POST['btnRegister'])) {
    $fullname = addslashes($_POST['txtFullname']);
    $birthdate = addslashes($_POST['txtBirthdate']);
    $email = addslashes($_POST['txtEmail']);
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    $accesslevel = "user";

    $check_user = mysqli_query($conn, "SELECT * FROM accounts WHERE username='$username'");
    if (mysqli_num_rows($check_user) > 0) {
        echo "<script>alert('Username already taken! Choose another.'); window.location='signup.php';</script>";
        exit();
    }

    $sql = "INSERT INTO accounts (username, password, accesslevel, fullname, birthdate, email) 
            VALUES ('$username', '$password', '$accesslevel', '$fullname', '$birthdate', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Account created successfully! You can now log in.'); window.location='index.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
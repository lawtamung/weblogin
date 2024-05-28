<?php
require('connect.php');

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if (mysqli_query($connect, $query)) {
        header('Location: login.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
} else {
    echo "Please fill all fields.";
}

mysqli_close($connect);
?>

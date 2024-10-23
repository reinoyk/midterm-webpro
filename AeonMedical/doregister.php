<?php
require "config/main.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $name     = mysqli_real_escape_string($connection, $_POST['name']);

    // Hash the password before saving
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO admin (username, password, nama) VALUES ('$username', '$hashed_password', '$name')";
    
    if (mysqli_query($connection, $query)) {
        echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}
?>

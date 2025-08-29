<?php
include_once "database.php"; // Memasukkan kelas Database
include_once "formhandler.php"; // Memasukkan kelas FormHandler

$formHandler = new formhandler(); // Membuat objek FormHandler

// Menangani pengiriman form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if ($formHandler->saveUser($name, $email)) {
        echo "User saved successfully!";
    } else {
        echo "Failed to save user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input User</title>
</head>
<body>
    <h1>Input User</h1>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

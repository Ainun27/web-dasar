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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Home</h1>
        <nav>
            <a href="tugas.php">Form Input</a>
        </nav>
    </header>
    <main>
    </main>
    <footer>
        <p>&copy; 2024 Home Project</p>
    </footer>
</body>
</html>


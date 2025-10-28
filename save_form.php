<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert query
    $sql = "INSERT INTO users (name,email,message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Show alert and redirect back to contact page
        echo "<script>
                alert('Thank you for submitting the form!');
                window.location.href='contact.html';
              </script>";
    } else {
        // Show error alert
        $error = addslashes($conn->error); // escape quotes
        echo "<script>
                alert('Error: $error');
                window.location.href='contact.html';
              </script>";
    }

    $conn->close();
}
?>

<?php
// Include the database connection file
include '../koneksi/koneksi.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $username = $_POST["username"];
    $comment = $_POST["comment"];

    // Insert data into the comments table
    $insertComment = "INSERT INTO comments (username, comment) VALUES ('$username', '$comment')";

    if (mysqli_query($conn, $insertComment)) {
        // Comment submitted successfully
        echo '<script>';
        echo 'alert("Comment submitted successfully.");';
        echo 'window.location.href = "../index.php";'; // Redirect to the desired path
        echo '</script>';
    } else {
        echo "Error: " . $insertComment . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

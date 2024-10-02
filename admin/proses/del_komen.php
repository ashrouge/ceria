<?php
include '../../koneksi/koneksi.php';

// Check if the comment ID is set
if (isset($_GET['id'])) {
    $commentID = $_GET['id'];

    // Delete the comment from the database
    $deleteComment = "DELETE FROM comments WHERE id = $commentID";

    if (mysqli_query($conn, $deleteComment)) {
        echo '<script>alert("Comment deleted successfully.");</script>';
    } else {
        echo '<script>alert("Error deleting comment: ' . mysqli_error($conn) . '");</script>';
    }

    // Redirect back to the page where comments are displayed
    echo '<script>window.location.href="../komentar.php";</script>';
} else {
    // Redirect to the home page if the comment ID is not set
    echo '<script>window.location.href="../komentar.php";</script>';
}
?>

<?php
include("../connection/connect.php"); // Make sure this path is correct

$new_password = "admin123"; // Set your new password
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

$username = "admin"; // Replace with actual username

$sql = "UPDATE admin SET password='$hashed_password' WHERE username='$username'";

if (mysqli_query($db, $sql)) {
    echo "Password updated successfully!";
} else {
    echo "Error: " . mysqli_error($db);
}
?>

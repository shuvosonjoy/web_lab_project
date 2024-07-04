<?php
include 'config.php';

if (isset($_POST['deletePlanetSelect'])) {
    $name = $_POST['deletePlanetSelect'];
     echo("name: $name");

    // Prepare SQL statement
    $sql = "DELETE FROM planets WHERE name = ?";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);

    // Execute SQL statement
    if ($stmt->execute()) {
        $_SESSION['message'] = "Planet deleted successfully";
    } else {
        $_SESSION['message'] = "Error deleting planet: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
} else {
    $_SESSION['message'] = "Error: Planet name not provided";
}

$conn->close();

// Redirect back to index.php
header("Location: index.php");
exit();
?>

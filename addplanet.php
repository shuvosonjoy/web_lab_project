<?php
include 'config.php';

if (isset($_POST['planetName']) && isset($_POST['planetDetails'])) {
    $planetName = $_POST['planetName'];
    $planetDetails = $_POST['planetDetails'];

    // Prepare SQL statement
    $sql = "INSERT INTO planets (name, details) VALUES (?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $planetName, $planetDetails);

    // Execute SQL statement
    if ($stmt->execute()) {
        $_SESSION['message'] = "Planet added successfully";
    } else {
        $_SESSION['message'] = "Error adding planet: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
} else {
    $_SESSION['message'] = "Error: Planet details not provided";
}

$conn->close();

// Redirect back to index.php
header("Location: index.php");
exit();
?>

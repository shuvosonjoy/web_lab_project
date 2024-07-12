<?php
include 'config.php';

if (isset($_POST['planetName']) && isset($_POST['planetDetails'])) {
    $planetName = $_POST['planetName'];
    $planetDetails = $_POST['planetDetails'];

   
    $sql = "INSERT INTO planets (name, details) VALUES (?, ?)";

   
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $planetName, $planetDetails);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Planet added successfully";
    } else {
        $_SESSION['message'] = "Error adding planet: " . $conn->error;
    }

    $stmt->close();
} else {
    $_SESSION['message'] = "Error: Planet details not provided";
}

$conn->close();


header("Location: index.php");
exit();
?>

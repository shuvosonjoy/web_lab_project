<?php
include 'config.php';

if (isset($_POST['deletePlanetSelect'])) {
    $name = $_POST['deletePlanetSelect'];
     echo("name: $name");


    $sql = "DELETE FROM planets WHERE name = ?";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);


    if ($stmt->execute()) {
        $_SESSION['message'] = "Planet deleted successfully";
    } else {
        $_SESSION['message'] = "Error deleting planet: " . $conn->error;
    }

    $stmt->close();
} else {
    $_SESSION['message'] = "Error: Planet name not provided";
}

$conn->close();

header("Location: index.php");
exit();
?>

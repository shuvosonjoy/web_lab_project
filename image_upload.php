<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $imageName = $_POST['name'];
    $imageDescription = $_POST['description'];
    $imageData = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $sql = "INSERT INTO images (image_name, image_description, image_data) VALUES ('$imageName', '$imageDescription', '$imageData')";

    if ($conn->query($sql) === TRUE) {
        header("Location: image_index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<?php
include 'config.php';

$sql = "SELECT image_name, image_description, image_data FROM images";
$result = $conn->query($sql);

$images = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $images[] = [
            'image_name' => $row['image_name'],
            'image_description' => $row['image_description'],
            'image_data' => base64_encode($row['image_data'])
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($images);

$conn->close();
?>

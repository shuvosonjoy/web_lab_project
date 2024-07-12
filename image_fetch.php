<?php
include 'config.php';



$sql = "SELECT image_data FROM images";
$result = $conn->query($sql);

$images = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $images[] = [
            'image_data' => base64_encode($row['image_data'])
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($images);

$conn->close();
?>

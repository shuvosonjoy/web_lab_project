<?php
include 'config.php';

$sql = "SELECT * FROM planets";
$result = $conn->query($sql);

$planets = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $planets[] = [
            'name' => $row['name'],
            'details' => $row['details']
        ];
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($planets);
?>

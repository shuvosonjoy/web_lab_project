<?php
include 'config.php';
echo "Updating planet with name: "  . "<br>";
if (isset($_POST['selectPlanet']) && isset($_POST['updatePlanetName']) && isset($_POST['updatePlanetDetails'])) {
    $selectPlanet = $_POST['selectPlanet'];
    $updatePlanetName = $_POST['updatePlanetName'];
    $updatePlanetDetails = $_POST['updatePlanetDetails'];


    echo "Updating planet with name: " . $selectPlanet . "<br>";
    echo "New name: " . $updatePlanetName . "<br>";
    echo "New details: " . $updatePlanetDetails . "<br>";


    $sql = "UPDATE planets SET name = ?, details = ? WHERE name = ?";

    echo "SQL query: " . $sql . "<br>";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $updatePlanetName, $updatePlanetDetails, $selectPlanet);


    if ($stmt->execute()) {
        $_SESSION['message'] = "Planet updated successfully";
    } else {
        $_SESSION['message'] = "Error updating planet: " . $conn->error;
    }


    $stmt->close();
} else {
    $_SESSION['message'] = "Error: Planet details not provided";
}

$conn->close();



?>

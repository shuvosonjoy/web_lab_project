<?php
session_start();
include 'config.php';

$planets = [];
$sql = "SELECT * FROM planets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $planets[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Jam Inspired</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#view-planets" id="viewPlanets">View All Planets</a></li>
            <li><a href="#add-planets" id="addPlanet">Add New Planets</a></li>
            <li><a href="#update-planets" id="updatePlanet">Update Details of Planets</a></li>
            <li><a href="#delete-planets" id="deletePlanet">Delete Planets</a></li>
        </ul>
    </nav>

    <div class="title" id="home">Welcome to SpaceY</div>

    <div class="content">
        <button id="viewPlanetsButton">View All planets</button><br><br>
        <button id="addPlanetButton">Add new Planets</button><br><br>
        <button id="updatePlanetButton">Update details of planets</button><br><br>
        <button id="deletePlanetButton">Delete Planets</button>
    </div>

    <div class="planet planet1" id="planet1"></div>
    <div class="planet planet2" id="planet2"></div>
    <div class="planet planet3" id="planet3"></div>

    <?php if(isset($_SESSION['message'])): ?>
        <div class="message"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></div>
    <?php endif; ?>

    <!-- Modal for Adding Planet -->
    <div class="modal" id="addModal">
        <div class="modal-content">
            <span class="close" id="closeAddModal">&times;</span>
            <h2>Add Planet</h2>
            <form id="addForm" action="addplanet.php" method="POST">
                <label for="planetName">Planet Name:</label><br>
                <input type="text" id="planetName" name="planetName"><br><br>
                <label for="planetDetails">Planet Details:</label><br>
                <textarea id="planetDetails" name="planetDetails"></textarea><br><br>
                <button type="submit">Add Planet</button>
            </form>
        </div>
    </div>

    <!-- Modal for Updating Planet -->
    <div class="modal" id="updateModal">
        <div class="modal-content">
            <span class="close" id="closeUpdateModal">&times;</span>
            <h2>Update Planet</h2>
            <form id="updateForm" action="updateplanet.php" method="POST">
              
                <label for="selectPlanet" name="selectPlanet">Previouse Planet: </label><br>
                <input type="text" id ="selectPlanet" name = "selectPlanet"><br><br>
                <label for="updatePlanetName">Planet Name:</label><br>
                <input type="text" id="updatePlanetName" name="updatePlanetName"><br><br>
                <label for="updatePlanetDetails">Planet Details:</label><br>
                <textarea id="updatePlanetDetails" name="updatePlanetDetails"></textarea><br><br>
                <button type="submit">Update Planet</button>
            </form>
        </div>
    </div>

    <!-- Modal for Confirming Delete -->
   <!-- Modal for Confirming Delete -->
<div class="modal" id="deleteModal">
    <div class="modal-content">
        <span class="close" id="closeDeleteModal">&times;</span>
        <h2>Delete Planet</h2>
        <form id="deleteForm" action="deleteplanet.php" method="POST">
            <label for="deletePlanetSelect">Select Planet:</label><br>
            <select id="deletePlanetSelect" name="deletePlanetSelect">
                <?php foreach($planets as $planet): ?>
                    <option value="<?php echo $planet['id']; ?>"><?php echo $planet['name']; ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <button type="submit">Delete Planet</button>
        </form>
    </div>
</div>


    <script src="script.js"></script>
</body>
</html>

<?php $conn->close(); ?>

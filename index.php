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
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Your custom styles -->
    <link rel="stylesheet" href="styles.css">

    <!-- Bootstrap Bundle JS (includes Popper.js) and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
   <div class="logo">SpaceY</div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-darkblue navbar-custom-height">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
  
     <form class="d-flex search-form">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  
    </div>
  </div>
</nav>

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
                <label for="selectPlanet" name="selectPlanet">Previous Planet:</label><br>
                <input type="text" id="selectPlanet" name="selectPlanet"><br><br>
                <label for="updatePlanetName">Planet Name:</label><br>
                <input type="text" id="updatePlanetName" name="updatePlanetName"><br><br>
                <label for="updatePlanetDetails">Planet Details:</label><br>
                <textarea id="updatePlanetDetails" name="updatePlanetDetails"></textarea><br><br>
                <button type="submit">Update Planet</button>
            </form>
        </div>
    </div>

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

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section left">&copy; 2024 SpaceY All rights reserved.<br>
            Page Last Updated : July 5, 2024</p></div>
            <div class="footer-section center"><p>Sonjoy Sutradhar Shuvo</p></div>
            <div class="footer-section right"><p>Sonjoy Sutradhar Shuvo</p></div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

<?php $conn->close(); ?>

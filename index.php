<?php
session_start();
include 'config.php';

$planets = [];
$sql = "SELECT * FROM planets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .viewplanets button{
    background-color: darkblue;
    font-family: 'Trebuchet MS', sans-serif;
    font-size: 20;
    margin-left: 20px;
    font-weight: bold;
    color: white;
  }
  .addPlanetButton button{
    background-color: darkblue;
    font-family: 'Trebuchet MS', sans-serif;
    font-size: 20;
    font-weight: bold;
    color: white;
  }
  .deletePlanetButton button{
    background-color: darkblue;
    font-family: 'Trebuchet MS', sans-serif;
    font-size: 20;
    font-weight: bold;
    color: white;
  }
  .updatePlanetButton button{
    background-color: darkblue;
    font-family: 'Trebuchet MS', sans-serif;
    font-size: 20;
    font-weight: bold;
    color: white;
  }
</style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Jam Inspired</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">


    <link rel="stylesheet" href="styles.css">

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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="image_index.php">Mission</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="createslider.php">Next Mission</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
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
       <a href="viewplanets.php" class="viewplanets"><button class="btn btn-primary" >View All planets</button></a> <br><br>
       
      <div class="addPlanetButton"> <button id="addPlanetButton" class="btn btn-primary">Add new Planets</button><br><br></div>
       
      <div class="updatePlanetButton"> <button id="updatePlanetButton" class="btn btn-primary">Update details of planets</button><br><br></div>

      <div class="deletePlanetButton"> <button id="deletePlanetButton" class="btn btn-primary">Delete Planet Info</button><br><br></div>
    </div>

    

    <div class="planet planet1" id="planet1" ></div>
    <div class="planet planet2" id="planet2"></div>
    <div class="planet planet3" id="planet3"></div>





    <?php if(isset($_SESSION['message'])): ?>
        <div class="message"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></div>
    <?php endif; ?>

   
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

 
    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <span class="close" id="closeDeleteModal">&times;</span>
            <h2>Delete Planet</h2>
            <form id="deleteForm" action="deleteplanet.php" method="POST">
                <label for="deletePlanetSelect">Enter Planet Name you wanted to delete:</label><br>
                <input type="text" id="deletePlanetSelect" name="deletePlanetSelect"><br><br>
                <button type="submit">Delete Planet</button>
            </form>
        </div>
    </div>


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

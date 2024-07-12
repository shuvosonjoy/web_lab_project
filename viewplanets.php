<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Planets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .planet-box {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .planet-number {
            font-weight: bold;
            color: #333;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .planet-name {
            font-weight: bold;
            color: #333;
        }
        .planet-details {
            color: #666;
        }
        .homebutton button{
           color: white;
           font-weight: bold;
           background-color: green;
           margin-left: 90%;
           padding: 10px;
           margin-bottom:10px;
        }
    </style>
</head>
<body>
    <h2>View Planets</h2>
    <a href="index.php" class="homebutton">
    <button class="btn btn-primary">Home</button>
</a>
    
    <?php
    include 'config.php';

  
    $sql = "SELECT * FROM planets";
    $result = $conn->query($sql);

 
    $index = 1;

   
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            echo '<div class="planet-box">';
            echo '<p class="planet-number">' . $index . '</p>';
            echo '<p class="planet-name">Planet Name: ' . $row["name"]. '</p>';
            echo '<p class="planet-details">Details: ' . $row["details"]. '</p>';
            echo '</div>';
            $index++; 
        }
    } else {
        echo "<p>No planets found</p>";
    }

    $conn->close();
    ?>
</body>
</html>

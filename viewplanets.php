<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Planets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('/images/background.jpg'); 
            color: #fff;
            padding: 20px;
        }
        .planet-box {
            background-color: #1a1a1a;
            border: 1px solid #666;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .planet-number {
            font-weight: bold;
            color: #ccc;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .planet-name {
            font-weight: bold;
            color: #ccc;
        }
        .planet-details {
            color: #999;
        }
        .homebutton {
            text-align: right;
            margin-bottom: 20px;
        }
        .homebutton a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            background-color: #00008b;
            border: 1px solid #00008b;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .homebutton a:hover {
            background-color: #0056b3; 
            border-color: #0056b3; 
        }
    </style>
</head>
<body>
    <h2>View Planets</h2>
    <div class="homebutton">
        <a href="index.php">Home</a>
    </div>
    
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

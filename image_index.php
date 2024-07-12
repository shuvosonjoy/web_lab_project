<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" href="styles.css">
    <style>
   body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="file"] {
    margin-bottom: 20px;
}

button {
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

#image-gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

#image-gallery img {
    max-width: 100px;
    max-height: 100px;
    object-fit: cover;
}


    </style>
</head>
<body>
<body>
    <div class="container">
        <h1>Upload an Image</h1>
        <form action="image_upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <button type="submit">Upload</button>
        </form>
        <h2>Uploaded Images</h2>
        <div id="image-gallery"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>

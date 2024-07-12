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
        input[type="file"], input[type="text"], textarea {
            margin-bottom: 20px;
            width: 100%;
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
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            align-items: center;
        }
        .image-container {
            display: flex;
            align-items: center;
            background: #fff;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 600px;
        }
        .image-container img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            margin-right: 20px;
        }
        .image-container .image-info {
            flex: 1;
        }
        .image-container h3 {
            margin: 0;
        }
        .image-container p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #555;
        }
        .homepage{
            margin-left: 90%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload an Image</h1>
    <div class = "homepage"><a href="index.php"><button>Home</button></a></div>

        <form action="image_upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <input type="text" name="name" placeholder="Image Name" required>
            <textarea name="description" placeholder="Image Description" required></textarea>
            <button type="submit">Upload</button>
        </form>
        <h2>Uploaded Images</h2>
        <div id="image-gallery"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('image_fetch.php')
                .then(response => response.json())
                .then(images => {
                    const gallery = document.getElementById('image-gallery');
                    images.forEach(image => {
                        const imgDiv = document.createElement('div');
                        imgDiv.classList.add('image-container');
                        const imgElement = document.createElement('img');
                        const imgInfo = document.createElement('div');
                        imgInfo.classList.add('image-info');
                        const imgName = document.createElement('h3');
                        const imgDescription = document.createElement('p');

                        imgElement.src = `data:image/jpeg;base64,${image.image_data}`;
                        imgName.textContent = image.image_name;
                        imgDescription.textContent = image.image_description;

                        imgInfo.appendChild(imgName);
                        imgInfo.appendChild(imgDescription);
                        imgDiv.appendChild(imgElement);
                        imgDiv.appendChild(imgInfo);
                        gallery.appendChild(imgDiv);
                    });
                });
        });
    </script>
</body>
</html>

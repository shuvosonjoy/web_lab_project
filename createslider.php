<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .carousel-img {
            width: 30%; 
            height: auto; 
            margin: 0 auto; 
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            border-radius: 50%; 
        }
        .carousel-caption {
            position: static; 
            text-align: center; 
            color: black
        }
        .homebutton button{
           color: white;
           font-weight: bold;
           background-color: green;
           margin-left: 90%;
        }
       
    </style>
</head>
<body>
<div>
    <h1>More info about Planets</h1>
    <a href="index.php" class="homebutton">
    <button class="btn btn-primary">Home</button>
</a>


</div>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

  <ol class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">
    <h class="carousel-item active">
      <img src="/images/earth.png" class="d-block carousel-img" alt="Earth">
      <div class="carousel-caption">
        <h5>Earth</h5>
        <p>This is our homeplanet</p>
       
      </div>
    </h>
    <div class="carousel-item">
      <img src="/images/mars.png" class="d-block carousel-img" alt="Mars">
    </div>
    <div class="carousel-item">
      <img src="/images/mars.png" class="d-block carousel-img" alt="Mars">
    </div>
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>

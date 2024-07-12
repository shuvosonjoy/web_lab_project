<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       body {
            background-color: black;
            color:white;
            font-family: Arial, sans-serif;
        }
        .container-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        form {
            background-color: black;
            color:white;
            padding: 30px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
        }
        form h3 {
            margin-bottom: 20px;
            color: white;
            font-weight: bold;
            text-align: center;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: none;
            border-color: #ced4da;
        }
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: white;
            color:black;
            font-weight: bold;
            border-color: #007bff;
           
        }
        .btn-primary:hover {
            background-color: green;
            border-color: #0056b3;
        }
       
        a {
            display: block;
            color:green;
            margin-top: 15px;
            text-align: center;
        
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="conatiner-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insert.php" method="post">
                    <div class="mb-3">
                           <h3>Register Form</h3> 
                    </div>
                    <div class="mb-3">
                      username : 
                      <input type="text" class="form-control" name = "r_username">
                      
                    </div>
                    <div class="mb-3">
                      Password :
                      <input type="text" class="form-control" name="r_pass">
                    </div>
                    <div class="mb-3">
                      Confirm Password :
                      <input type="text" class="form-control" name="r_con_pass">
                    </div>
                    <div class="mb-3">
                      Email :
                      <input type="text" class="form-control" name="r_email">
                    </div>
                    <div class="mb-3">
                      mobile :
                      <input type="tel" class="form-control" name="r_mobile">
                    </div>
                   
                    <button type="submit" class="btn btn-primary col-12" name="submit">Register</button>
                    <a href="login.php">login here</a>
                </form>
            </div>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
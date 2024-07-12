<?php
if(isset($_POST['login'])){
    include 'config.php';
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];
    echo("username: $l_username");
    echo("password: $l_pass");

    $result = mysqli_query($conn,"SELECT * FROM `authentication` WHERE username='$l_username' And Password='$l_pass'");


    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['username'] = $l_username; 
        header("Location: index.php");
        exit;

        
    }
    else{
        echo "<script>alert('Invalid username and Password!!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}

?>
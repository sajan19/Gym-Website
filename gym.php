<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HardCore Fitness Gym</title>
    <link rel="stylesheet" href="style.css" class="css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

</head>
<style>
    /* CSS Reset */

    body {
        font-family: 'Roboto Slab', serif;
        /* font-family: 'Pattaya', sans-serif; */
        margin: 0px;
        padding: 0px;
        background: url('bg.jpg');
        height: 800px;
        color: white;

    }

    .left {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        padding: 2px 12px;
        font-size: 20px;
        left: 25px;
        top: 20px;
        text-align: center;
    }

    .left h1 {

        text-align: center;
        color: white;
        margin: 2px;
        font-size: 20px;
    }
    

   
    .left img {

        width: 150px;
        filter: invert(100%);
        border-radius: 150px;
    }

    .mid {
        display: block;
        /* border: 2px solid blue; */
        width: 40%;
        margin: 20px auto;

    }


    .right {
        display: inline-block;
        position: absolute;
        right: 25px;
        top: 20px;
        /* border: 2px solid yellow; */

    }

    .navbar {
        display: inline-block;

    }

    .navbar li {
        display: inline-block;
        /* color: white; */

    }

    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 20px 20px;
        font-size: 18px;
    }


    .navbar li a:hover,
    .navbar li a:active {
        text-decoration: underline;
        color: grey;
    }

    .btn {
        margin: 10px 10px;
        background-color: silver;
        color: black;
        padding: 6px 20px;
        border: 2px solid rgb(14, 9, 9);
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
        font-family: 'Roboto Slab', serif;
        /* font-family: 'Pattaya', sans-serif; */

    }

    .btn:hover {
        background-color: grey
    }

    .container {
        /* border: 2px solid white; */
        margin: 90px 878px;
        padding: 106px;
        width: 18%;
        height: 225px;
        border-radius: 10px;
        font-size: 14px;
        font-family: 'Roboto Slab', serif;
        /* font-family: 'Pattaya', sans-serif; */
    }

    .container button {
        margin: 15px 25px;
        display: block;
        width: 135%;
        padding: 10px;
        border-radius: 15px;
        background-color: silver;
    }

    .title {
        text-align: center;
        margin: 25px 50px;
        /* border: 2px solid violet; */
        padding: 2px 1px;
        position: absolute;
        top: 200px;
    }


    .form-group input {
        text-align: center;
        display: block;
        width: 300px;
        padding: 10px;
        border: 2px solid black;
        margin: 10px 25px;
        border-radius: 10px;
        font-size: 20px;
        font-family: 'Roboto Slab', serif;
        /* font-family: 'Pattaya', sans-serif; */
    }

    
</style>




<body>
    <header class="header">
        <div class="left">
            <!-- Left Box for LOGO -->
            <img src="logod.jpg" class="fit" alt="">
            <H1>HARDCORE GYM</H1>

        </div>
        <div class="mid">

            <!-- Mid Box for Navigation Bar -->
            <ul class="navbar">

                <li> <a href="#">Home </a></li>
                <li> <a href="#">About</a></li>
                <li> <a href="#">Fitness Corner</a></li>
                <li> <a href="#">Contact Us</a></li>


            </ul>
        </div>

        <div class="right">


            <!-- right box for buttons -->
            <button class="btn">Call Us Now</button>
            <button class="btn">E-mail Us</button>
        </div>

    </header>
    <div class="container">
        <h1 class="title">Join The Best Gym</h1>         
        <!-- <form action="noaction.php">  -->
        <form action="/sajan/practice/gym/gym.php" method="post">

            <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
            <label for="name"> Gender</label>
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            </div>
            <div class="form-group">
            <label for="name"> Mobile No.</label>
            <input type="text" name="mobile" id="mobile" placeholder="Enter your Mobile No.">
            </div>
            <div class="form-group">
            <label for="name"> Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your Name">
            </div>

            

            <button class="btn">Submit</button>
        </form>
   


    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        
      // Submit these to a database

    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gym";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        // echo "Connection was successful<br>";
    }
    // Sql query to be executed

    $sql= "INSERT INTO `form` (`name`, `gender`, `mobile`, `email`) VALUES ('$name', '$gender', '$mobile', '$email')";

    $result = mysqli_query($conn, $sql);

// Check for the table creation success
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>';
            }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> The form has not being submitted due to some Technical Error!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>';
             }
  
}
?>


</body>

</html>
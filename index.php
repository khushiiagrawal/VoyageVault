<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$insert = false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    // Database connection
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // Select database
    mysqli_select_db($con, 'UK_trip') or die("Database selection failed: " . mysqli_error($con));

    // Get form data
    $name = $_POST['name'];
    $age = $_POST['age']; 
    $gender = $_POST['gender']; 
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    // Insert query
    $sql = "INSERT INTO `UK_trip`.`trip` (`Name`, `Age`, `Gender`, `Phone`, `Email`, `Any_Description`, `Date_Time`) 
        VALUES ('$name', '$age', '$gender', '$phone', '$email', '$desc', current_timestamp());";


    // Execute query
    if($con->query($sql) === TRUE){
        $insert = true;
    } else {
        echo "Error: $sql <br>" . $con->error;
    }

    // Close connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOYAGE VAULT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Students' UK Voyage Form</h1>
        <p>Enter your details and submit the form to confirm your participation in the trip</p>

        <?php
        if(isset($insert) && $insert == true){
            echo "<p class='submitmsg'>Thank you for submitting. We are happy to see you joining with us!😊</p>";
        }
        ?>

        <form action="index.php" method="post">
        <br/>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="number" name="age" id="age" placeholder="Enter your age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
            <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <textarea name="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <div class="btn-container">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>

    <script src="index.js"></script>
</body>
</html>

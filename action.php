<?php
    // Connecting to Server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "registration";

    // Creating Connection
    $conn = mysqli_connect($servername,$username,$password,$database);

    // Die if not connected
    if(!$conn){
        die("Connection Failed: ". mysqli_connect_errno());
    }
    else{
        echo "Connection was Succesful";
        // Set Variable Names
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        // submit to database
        $sql = "INSERT INTO `registration` (`Name`, `Age`, `Phone`, `Gender`, `Email`, `Submision`) VALUES ('$name', '$age', '$phone', '$gender', '$email', current_timestamp());";

        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Insertion Succesful";
        }
        else{
            echo "Insertion Not Succesful";
        }
    }
?>
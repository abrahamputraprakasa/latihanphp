<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "latihan";
    $port = "33061";

    //MySQLi
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $user = $_POST['user'];
    $email = $_POST['email'];


    // //Insert Biasa
    // $sql = "INSERT INTO users (`name`, email)
    // VALUES ('$user', '$email')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "$user created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // Prepared Statement
    $stmt = $conn->prepare("INSERT INTO users (email, `name`) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $user);
    $stmt->execute();
    echo "$user created successfully";

    $conn->close();

    echo "<a href='/latihan'>Back to Home</a>"
?>
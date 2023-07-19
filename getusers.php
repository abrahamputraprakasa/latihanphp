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

    $sql = "SELECT id, `name`, email FROM users";
    $result = $conn->query($sql);
    $datas = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            // echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
            $datas[] = $row;
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    echo json_encode($datas);

?>
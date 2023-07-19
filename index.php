<html>

<head>
    <style>
        .atas {
            background-color: #eee;
        }

        .bawah {
            background-color: #ccc;
        }
    </style>
</head>

<body>
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
    echo "Connected to MySQL successfully using MySQLi <br>";

    $sql = "SELECT id, `name`, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    //PDO
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$database;port=$port", $username, $password);
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected to MySQL successfully using PDO";
    // } catch (PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    // }

    $sekarang = date('Y-m-d H:i:s');
    $user = '';
    if (isset($_GET['user'])) {
        $user = $_GET['user'];
    }
    ?>
    <?php if (false) : ?>
        <div class="atas">
            <div>
                Selamat Datang
            </div>
            <div>
                <?= $sekarang; ?>
            </div>
        </div>
    <?php else : ?>
        <div class="bawah">
            <div>
                Halo <?= $user; ?>
            </div>
            <div>
                <?= $sekarang; ?>
            </div>
        </div>
        <form action="submit.php" method="POST">
            <input type="text" name="user"></input>
            <input type="text" name="email"></input>
            <button>Submit</button>
        </form>
    <?php endif ?>
</body>

</html>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <?php

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
            <div id="welcome">
                Selamat datang di project latihan
            </div>
            <div>
                <?= $sekarang; ?>
            </div>
        </div>
        <form action="submit.php" method="POST">
            <input type="text" name="user" placeholder="Name" autocomplete="off"></input>
            <input type="text" name="email" placeholder="Email" autocomplete="off"></input>
            <button>Submit</button>
        </form>

        <br>
        <button id="hitme">Hit me</button>
        <button onclick="getUsers()">Get Users</button>
    <?php endif ?>

    <script>
        // document.getElementById("welcome").innerHTML = "Hello World!";
        $("#welcome").html("Hello world by jQuery")
        $("#hitme").on("click", function(event) {
            if ($("#welcome").is(":visible")) {
                $("#welcome").hide();
            } else {
                $("#welcome").show();
            }
            // alert("button trigger from script");
        });

        function getUsers() {
            $.ajax({
                url: "/latihan/getusers.php",
                data: {
                },
                success: function(result) {
                    console.log(result);
                    // $("#weather-temp").html("<strong>" + result + "</strong> degrees");
                }
            });
        }
    </script>
</body>

</html>
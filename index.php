<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
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
        <div>
            <table id="tabelku">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </thead>
            </table>
        </div>
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
                data: {},
                dataType: 'json',
                success: function(result) {
                    console.log(result);
                    // let tabelku = "<table><thead><th>ID</th><th>Name</th><th>Email</th></thead>";
                    // for (let index = 0; index < result.length; index++) {
                    //     const element = result[index];
                    //     tabelku += "<tbody><tr>";
                    //     tabelku += "<td>" + element.id + "</td>";
                    //     tabelku += "<td>" + element.name + "</td>";
                    //     tabelku += "<td>" + element.email + "</td>";
                    //     tabelku += "</tbody></tr>";
                    // }
                    // $("#tabelku").html(tabelku);

                    $('#tabelku').DataTable({
                        data: result,
                        columns: [{
                                data: 'id'
                            },
                            {
                                data: 'name'
                            },
                            {
                                data: 'email'
                            },
                        ]
                    });
                }
            });
        }
    </script>
</body>

</html>
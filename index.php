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
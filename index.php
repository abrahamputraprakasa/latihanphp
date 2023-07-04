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
        $sekarang = date('Y m d H:i:s');
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
                Halo User
            </div>
            <div>
                <?= $sekarang; ?>
            </div>
        </div>
    <?php endif ?>
</body>

</html>
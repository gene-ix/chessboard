<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reboot.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>CHESS BOARD</title>
</head>

<body>

    <div class="board">

        <?php for ($i = 0; $i < 8; $i++) : ?>

            <div class="row">

                <?php for ($j = 0; $j < 8; $j++) : ?>

                    <div class="col"></div>

                <?php endfor; ?>

            </div>

        <?php endfor; ?>

    </div>

</body>

</html>
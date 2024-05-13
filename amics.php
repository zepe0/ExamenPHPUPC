<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>amics</title>
</head>

<body>
    <?php
    session_start();
    include_once ("header.php")
        ?>
    <main>

        <?php include_once ("listfrindes.php") ?>
    </main>
    <?php include_once ("footer.php") ?>
</body>

</html>
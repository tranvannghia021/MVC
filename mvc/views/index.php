<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost:8080/project/" target="_blank">
    <link rel="stylesheet" href="public/font/css/all.min.css">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/cart.css">
    <link rel="stylesheet" href="public/css/slider.css">
    <link rel="stylesheet" href="public/css/footer.css">




    <title>Trang Chủ</title>
</head>

<body>
    <div class="main">
        <?php
        include './mvc/views/blocks/menu.php';
        ?>
        <?php
        require_once "./mvc/views/pages/" . $data['page'] . ".php";
        ?>
        <?php
        include './mvc/views/blocks/footer.php';
        ?>
    </div>
</body>
<script src="public/js/slider.js"></script>

</html>
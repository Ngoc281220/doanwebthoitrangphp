<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
      <div class="app">
          <?php
             session_start();
             include("admin/config/config.php");
             include("pages/header.php");
             include("pages/main.php");
             include("pages/footer.php");
          ?>
      </div>
</body>
</html>
<?php
   
   include("config/config.php");
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body>
    <div class="app">
        <div class="wrapper">
            <div class="sidebar">
               <?php
                   include("sidebar/sidebar.php")
               ?>
            </div>
            <div class="main">
                <?php
                   include("header/header.php")
                ?>
                <div class="content">
                    <?php 
                        if(isset($_GET['action']) && isset($_GET['query'])){
                            $tam = $_GET['action'];
                            $query = $_GET['query'];
                        }else{
                            $tam = "";
                            $query = "";
                        }
                        if($tam=="quanlydanhmucsanpham" && $query=="them"){
                             include("modules/Quanlydanhmucsanpham/them.php");
                             include("modules/Quanlydanhmucsanpham/index.php");
                        }else if($tam=="quanlydanhmucsanpham" && $query=="sua"){
                            include("modules/Quanlydanhmucsanpham/sua.php");
                            
                        }
                        else if($tam=="quanlysanpham" && $query=="them"){
                            include("modules/Quanlysanpham/them.php");
                            include("modules/Quanlysanpham/index.php");
                        }else if($tam=="quanlysanpham" && $query =="sua"){
                            include("modules/Quanlysanpham/sua.php");
                        }
                        else if($tam =="dashbord"){
                            include("modules/dashbord.php");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
       CKEDITOR.replace( 'mota' );
       CKEDITOR.replace( 'noidung' );
        
  </script>
</body>
</html>
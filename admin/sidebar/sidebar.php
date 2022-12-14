<?php
  
   if(isset($_GET['dangxuat'])&&($_GET['dangxuat']==1)){
     unset($_SESSION['dangnhap'],$_SESSION['avata']);
     header('location:login.php');
   }
?>           
               
 <a href="index.php" class="logo">
        <div class="info">
            <img src="img/thoitrang.jpg" alt="" >

        </div>
 </a>

<nav>
     <a href="index.php?action=dashbord">Trang chủ</a>
     <a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a>
     <a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a>
     <a href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a>
     <a href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a>
     <a href="index.php?dangxuat=1">Sign Out</a>
                        
 </nav>
<?php
   if(isset($_GET['dangxuat'])&& ($_GET['dangxuat']==1)){
       unset($_SESSION['dangky']);
   }
?>
<header>
              <div class="menu">
                 <a class="logo" href="index.php?quanly=trangchu"><img src="assets/img/thoitrang.jpg" alt=""></a>
                 <ul>
                     <li><a href="index.php?quanly=trangchu">Trang chủ</a></li>
                     <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                     <?php
                        if(isset($_SESSION['dangky'])){
                     ?>
                        <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
                     <?php
                        }else{
                     ?>
                       <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                     <?php
                        }
                     ?>
                     
                     <li><a href="index.php?quanly=tintuc">Tin tức</a></li>
                     <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
                 </ul>
                 <div class="icon-user">
                       <img src="assets/img/user.PNG" alt="icon-user">
               </div>
              </div>
</header>
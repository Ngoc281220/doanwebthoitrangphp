<?php

   if(isset($_POST['dangky'])){
       $username = $_POST['username'];
       $email = $_POST['email'];
       $diachi = $_POST['diachi'];
       $phone = $_POST['phone'];
       $matkhau = $_POST['matkhau'];
       $nhaplaimatkhau = $_POST['nhaplaimatkhau'];
       $trangthai = 0;
       // đăng ký tài khoản người dùng
       if($username ==" " || $email ==''){
          echo '<p style="color:red;">Bạn hãy nhập đủ thông tin!</p>';
       }
       else if($matkhau !=$nhaplaimatkhau){
        echo '<p style="color:red;">Bạn đã đăng ký thất bại</p>';
       }
       else{
            $sql_insert = "INSERT INTO user(username, email, diachi, phone, matkhau, nhaplaimatkhau, status_user)  VALUES ('$username','$email','$diachi','$phone','$matkhau','$nhaplaimatkhau','$trangthai')";
            $query = mysqli_query($connect,$sql_insert);
            // $row = mysqli_fetch_array($query);
            if($query){
                echo '<p style="color:red;">Bạn đã đăng ký thành công</p>';
                 $_SESSION['dangky'] = $username;
                 $_SESSION['email'] = $email;
                 $_SESSION['diachi'] = $diachi;
                 $_SESSION['dienthoai'] = $phone;
                 $_SESSION['id_khachhang']=mysqli_insert_id($connect);
                 header('location:index.php?quanly=giohang');
            }
       }
      
   }
?>
<div class="dangky_user">
     <div class="dangky-content">
        <h3>Đăng ký</h3>
        <form action="" method="POST" autocomplete="off">
            <div class="input-group">
                <span>Họ tên</span>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <span>Email</span>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <span>Địa chỉ</span>
                <input type="text" name="diachi">
            </div>
            <div class="input-group">
                <span>Phone</span>
                <input type="text" name="phone">
            </div>
            <div class="input-group">
                <span>Mật khẩu</span>
                <input type="password" name="matkhau">
            </div>
            <div class="input-group">
                <span>Nhập lại mật khẩu</span>
                <input type="password" name="nhaplaimatkhau">
            </div>
            <div class="submit">
                  <input type="submit" value="Đăng ký" name="dangky">
            </div>
            <p>Bạn đã có tài khoản? <a href="index.php?quanly=dangnhap">Đăng nhập</a></p>
        </form>
     </div>
</div>
<?php
  if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $sql = "SELECT * FROM user WHERE email = '$email' AND matkhau = '$matkhau 'LIMIT 1";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_num_rows($query);
    if($row > 0){
       $sql_data = mysqli_fetch_array($query);
       $_SESSION['id_khachhang'] = $sql_data['id_user'];
       $_SESSION['dangky'] = $sql_data['username'];
       $_SESSION['email'] = $sql_data['email'];
       $_SESSION['diachi'] = $sql_data['diachi'];
       $_SESSION['dienthoai'] = $sql_data['phone'];
       header('location:index.php?quanly=giohang');
    }else{
        echo'<p style="color:red;">Mật khẩu hoặc Email sai, vui lòng nhập lại.</p>';
    }
  }
?>
<div class="dangky_user">
     <div class="dangky-content">
        <h3>Đăng nhập</h3>
        <form action="" method="POST" autocomplete="off">
            
            <div class="input-group">
                <span>Email</span>
                <input type="text" name="email" placeholder="Email...">
            </div>
            
            
            <div class="input-group">
                <span>Mật khẩu</span>
                <input type="password"  name="matkhau" placeholder="Password...">
            </div>
            
            <div class="submit">
                  <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
            <p>Bạn đã chưa có tài khoản? <a href="index.php?quanly=dangky">Đăng ký</a></p>
        </form>
     </div>
</div>
<?php
    // session_start();
    include("admin/config/config.php");
?>
<p>Thanh toán</p>
<?php
    $id_khachhang = $_SESSION['id_khachhang'];
    $tenkhachhang = $_SESSION['dangky'];
    $email =  $_SESSION['email'] ;
    $diachi = $_SESSION['diachi'];
    $dienthoai = $_SESSION['dienthoai'];
    $code_order=rand(0,9999);
    $status_cart = 1;
    $sql_inser = "INSERT INTO tbl_cart( id_user,tenkhachhang, email, dienthoai, diachi, status_cart, code_cart)VALUES ('$id_khachhang','$tenkhachhang','$email','$dienthoai','$diachi','$status_cart','$code_order')";
     $query = mysqli_query($connect,$sql_inser);
   
     if($query){
        // $sql_select = "SELECT * FROM tbl_cart";
        // $query_cart = mysqli_query($connect,$sql_select);
        // $cart_query = mysqli_fetch_array($query_cart);
        foreach($_SESSION['cart'] as $cart_item){
           
            $id_sanpham = $cart_item['id'];
            $soluong = $cart_item['soluong'];
            $giasp = $cart_item['giasp'];
            $sql_insert = "INSERT INTO tbl_cart_detail(  id_sanpham, soluong, giasp, code_cart) 
            VALUES ('$id_sanpham','$soluong','$giasp','$code_order')";
            mysqli_query($connect, $sql_insert);
        }
     }
?>
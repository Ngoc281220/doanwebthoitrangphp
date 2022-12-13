<?php 
   session_start();
   include("../../admin/config/config.php");
   //them so luong
   //tru so luong
   // them san pham
   if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
   if(isset($_POST['themgiohang'])){
      // session_destroy();
      $id = $_GET['idsanpham'];
      $soluong = 1;
      $sql="SELECT * FROM product WHERE id_sp = $id LIMIT 1";
      $query = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($query);
      if($row){
           $tensanpham = $row['tensanpham'];
           $hinhanh = $row['hinhanh'];
           $giasp = $row['giasp'];
           $masp = $row['ma_sp'];
           $i=0;
           $check = false;
           if(isset($_SESSION['cart']) && (count($_SESSION['cart']))){
               foreach($_SESSION['cart'] as $product){
                  if($product['id']==$id){
                     //cập nhật mới số lượng
                     $soluong = $product['soluong']+1;
                     // Cập nhật mới số lượng vào gio hàng
                     $_SESSION['cart'][$i]['soluong'] = $soluong;
                     $check = true;
                     break;
                  }
                  $i++;
               }
           }
           //khi số lượng ban đầu không thay đổi thì thêm mới sp vào giỏ hàng
          if($check == false){
            $new_prodcut = array('tensanpham'=>$tensanpham,'id'=>$id,'hinhanh'=>$hinhanh,'soluong'=>$soluong,'giasp'=>$giasp,'masp'=>$masp);
            array_push($_SESSION['cart'],$new_prodcut);
          }
      }
   }
   header('location:../../index.php?quanly=giohang');
?>


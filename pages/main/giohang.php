<?php
    session_start();
?>
<?php
    if(isset($_SESSION['cart'])){
      //  echo "<pre>";
      //  print_r($_SESSION['cart']);
      //  echo "</pre>";
    }
   
?>
<p>Giỏ hàng</p>
<table width="100%"  >
  <tr>
    <th>#</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Mã sản phẩm</th>
    <th>Giá </th>
    <th>Thành tiền </th>
    <th>Xóa </th>
  </tr>
  <?php
     if(isset($_SESSION['cart'])){
        $i = 0;
        $tongtien = 0;
        foreach($_SESSION['cart']as $cart_item){
            $tensanpham = $cart_item['tensanpham'];
            $hinhanh = $cart_item['hinhanh'];
            $soluong = $cart_item['soluong'];
            $masp = $cart_item['masp'];
            $gia = $cart_item['giasp'];
            $thanhtien = $soluong * $gia;
            $tongtien = $tongtien + $thanhtien;
            $id_sanpham = $cart_item['id'];
            $i++;
  ?>
  <tr>
    
    <td><?php echo $i?></td>
    <td><?php echo $tensanpham?></td>
    <td><img src="admin/modules/Quanlysanpham/uploads/<?php echo $hinhanh?>" alt="" width="50px"></td>
    <td>
        <a href="pages/main/congtrusoluong.php?cong=<?php  echo $id_sanpham?>">+</a>
        <?php echo $soluong?> 
        <a href="pages/main/congtrusoluong.php?tru=<?php  echo $id_sanpham?>">-</a></td>
    <td><?php echo $masp?></td>
    <td><?php echo  number_format($gia, 0)?> VND</td>
    <td><?php echo number_format($thanhtien, 0)?>VND</td>
    <td><a href="pages/main/xoacart.php?xoa=<?php echo $id_sanpham?>">Xóa</a></td>
  </tr>
  <?php
     }
    
  ?>
  <tr >
      <td colspan=8>
        <p style="float:left">Tổng tiền đơn hàng:  <?php echo number_format($tongtien, 0)?> VND</p>
        <p style="float:right"><a href="pages/main/xoatatcacart.php?xoatatca=1" style="padding:10px 20px;background: #007bff;color: #fff;font-size: 16px;">Xóa tất cả</a></p>
      </td>

  </tr>
  <?php
     }
     else{
  ?>
    <tr >
          <td colspan=8><p>Hiện tại giỏ hàng còn trống</p></td>

      </tr>
  <?php
     }
  ?>
</table>
<h3 class="chitiet">Chi tiết sản phẩm</h3>
<?php
   $id = $_GET['id'];
   $sql_chitiet = "SELECT * FROM product,category WHERE product.id_danhmuc = category.id_danhmuc AND product.id_sp = '$id' LIMIT 1";
   $query_chitiet = mysqli_query($connect,$sql_chitiet);
   while($row = mysqli_fetch_array($query_chitiet)){
      $hinhanh = $row['hinhanh'];
      $tensanpham = $row['tensanpham'];
      $masp = $row['ma_sp'];
      $giasp = $row['giasp'];
      $soluong = $row['soluong'];
      $zise = $row['kichthuoc'];
      $tendanhmuc = $row['tendanhmuc'];
      
?>
    
<div class="warper_delite">
    <div class="img_datai">
        <img src="admin/modules/Quanlysanpham/uploads/<?php echo $hinhanh?>" alt="">
    </div>
    <div class="info_datai">
         <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $id?>">
            <h3><?php echo $tensanpham?></h3>
            <span>Mã SP: <?php echo $masp?></span>
            <span class="price"><?php echo  number_format($giasp, 0)?>  VND</span>
            <span class="soluong">Số Lượng:<?php echo $soluong?></span>
            <span class="kichthuoc">Size: <?php echo $zise?></span>
            <h4>Danh mục SP: <?php echo $tendanhmuc?></h4>
            <p><input type="submit" name="themgiohang" class="themgiohang" value="Thêm giỏ hàng"></p>
         </form>
    </div>
</div>
<?php 
   }
?>

<?php
    include("banner.php");
    
?>
<?php
     $sql_pro = "SELECT * FROM product,category WHERE product.id_danhmuc=category.id_danhmuc ORDER BY product.id_sp DESC LIMIT 4";
     $query_pro=mysqli_query($connect,$sql_pro);
?>
<div class="list-product">
                                 <h3>Tất cả sản phẩm</h3>
                                  <div class="list-item">
                                   <?php
                                      if($query_pro){
                                       while($row = mysqli_fetch_array($query_pro)){
                                          $id_sanpham = $row['id_sp'];
                                          $tendanhmuc = $row['tendanhmuc'];
                                          $hinhanh = $row['hinhanh'];
                                          $tensanpham = $row['tensanpham'];
                                          $giasp = $row['giasp'];
                                          
                                   ?>
                                     <div class="item">
                                          <a href="index.php?quanly=sanpham&id=<?php echo $id_sanpham ?>" class="item-link">
                                             <img src="admin/modules/Quanlysanpham/uploads/<?php echo $hinhanh?>">
                                          </a>
                                          <div class="home-title">
                                             <span class="style"><?php echo $tendanhmuc?></span>
                                             <a href="index.php?quanly=sanpham&id=<?php echo $id_sanpham ?>"><h4><?php echo $tensanpham?></h4></a>
                                             <span class="price"><?php echo  number_format($giasp, 0)?>  VND</span>
                                          </div>
                                     </div>
                                     <?php
                                      }}
                                     ?>
   </div>
</div>
   <?php
       include("thoitrangnu.php");
       include("thoitrangnam.php");
       include("thoitrangtreem.php");
   ?>
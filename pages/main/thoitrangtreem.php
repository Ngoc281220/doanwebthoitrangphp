<?php
     $sql_pro = "SELECT * FROM product,category WHERE product.id_danhmuc = category.id_danhmuc AND category.tendanhmuc LIKE '%Thời trang trẻ em%' LIMIT 4";
     $query_pro=mysqli_query($connect,$sql_pro);
?>
<div class="list-product">
                                 <h3>Thời trang trẻ em</h3>
                                  <div class="list-item">
                                   <?php
                                      if($query_pro){
                                       while($row = mysqli_fetch_array($query_pro)){
                                          $id_sanpham = $row['id_sp'];
                                          $tendanhmuc = $row['tendanhmuc'];
                                          $hinhanh = $row['hinhanh'];
                                          $tensanpham = $row['tensanpham'];
                                          $giasp = $row['giasp'];
                                          $id_danhmuc = $row['id_danhmuc'];
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
            <div  class="view-link">
                     <a href="index.php?quanly=thoitrangtreem&id=<?php echo $id_danhmuc?>" class="view"><span>Xem thêm</span></a>
                </div>
</div>
     
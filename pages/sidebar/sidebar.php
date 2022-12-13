<?php
       $sql_danhmuc = "SELECT * FROM category ORDER BY id_danhmuc ASC";
       $query_danhmuc = mysqli_query($connect,$sql_danhmuc);
?>
<div class="sidebar">
        <h3> <span>Danh mục sản phẩm</span></h3>
         <nav>
                <?php
                    while($row=mysqli_fetch_array($query_danhmuc)){
                        $id_danhmuc = $row['id_danhmuc'];
                        $tendanhmuc = $row['tendanhmuc'];
                ?>
                 <a href="index.php?quanly=danhmucsanpham&id=<?php echo $id_danhmuc?>"><?php echo $tendanhmuc?></a>
                 <?php
                    }
                 ?>
        </nav>
</div>
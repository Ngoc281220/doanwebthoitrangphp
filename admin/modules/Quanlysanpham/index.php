
<p>Liệt kê sản phẩm</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ma_sp</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Gía sp</th>
      <th scope="col">Số lượng </th>
      <th scope="col">Hình ảnh </th>
      <th scope="col">Kích thước </th>
      <th scope="col">Mô tả</th>
      <th scope="col">Nội dung</th>
      <th scope="col">Tình trạng</th>
      <th scope="col">Create_date</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    <?php
         $sql = "SELECT * FROM `product`";
         $togle = mysqli_query($connect,$sql);
         if($togle)
         {
            while($row = mysqli_fetch_assoc($togle))
            {
                $id = $row['id_sp'];
                $ma_sp = $row['ma_sp'];
                $tensanpham = $row['tensanpham'];
                $giasp = $row['giasp'];
                $soluong = $row['soluong'];
                $hinhanh = $row['hinhanh'];
                $kichthuoc = $row['kichthuoc'];
                $mota = $row['mota'];
                $noidung = $row['noidung'];
                $tinhtrang = $row['tinhtrang'];
                $create_date = $row['create_date'];
                
    ?>
            <tr>
                <th scope="row"><?php echo $id?></th>
                <td><?php echo $ma_sp?></td>
                <td><?php echo $tensanpham?></td>
                <td><?php echo $giasp?></td>
                <td><?php echo $soluong?></td>
                <td><img src="modules/Quanlysanpham/uploads/<?php echo $hinhanh?>" width="50px"></td>
                <td><?php echo $kichthuoc?></td>
                <td><?php echo $mota?></td>
                <td><?php echo $noidung?></td>
                <td><?php 
                      if($tinhtrang == 1){
                        echo "Kích hoạt";
                      }else{
                        echo "Ẩn";
                      }
                ?></td>
                <td><?php echo $create_date?></td>
                <td>
                  <button class="btn btn-danger"><a href="modules/Quanlysanpham/delete.php?id_sanpham=<?php echo $id?>" class="text-light">Delete</a></button>
                  <button class="btn btn-primary"><a href="?action=quanlysanpham&query=sua&id_sanpham=<?php echo $id?>" class="text-light" >Update</a></button>
			     
                </td>
            </tr>
        <?php }}?>
  </tbody>
</table>

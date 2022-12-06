<?php
    $sql = "SELECT * FROM `category` ORDER BY 'thutu' DESC";
    $result = mysqli_query($connect,$sql);
?>
<h3>Liệt kế danh mục sản phẩm</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên danh mục sản phẩm</th>
            <th scope="col">Thứ tự</th>
            <th scope="col">create_date</th>
            <th scope="col">Operations</th>
        
        </tr>
    </thead>
    <tbody>

       <?php
          if($result){
            while( $row = mysqli_fetch_assoc($result)){
                $id = $row['id_danhmuc'];
                $tendanhmuc = $row['tendanhmuc'];
                $thutu = $row['thutu'];
                $create_at = $row['create_date']
       ?>
        <tr>
            <th scope="row"><?php echo $id?></th>
            <td><?php echo $tendanhmuc?></td>
            <td><?php echo $thutu?></td>
            <td><?php echo $create_at?></td>
            <td>
                <button class="btn btn-danger"><a href="modules/Quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $id?>" class="text-light">Delete</a></button>
                 <button class="btn btn-primary"><a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $id?>" class="text-light" >Update</a></button>
			     
            </td>
        </tr>
        <?php }}?>
        
    </tbody>
</table>
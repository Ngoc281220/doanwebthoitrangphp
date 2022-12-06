<?php
    include("../../config/config.php");
    if(isset($_POST['themdanhmucsp'])){
        $tendanhmuc = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
        if(empty($tendanhmuc) && empty($thutu)){
            echo '<script>alert("Không thể thêm danh mục sản phẩm.")</script>';
            header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
           
        }
         else{
            $sql_them = "INSERT INTO `category`( `tendanhmuc`, `thutu`) VALUES ('$tendanhmuc','$thutu')";
            $resurl = mysqli_query($connect,$sql_them);
            if($resurl){
                header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
            }else{
                        echo "Thất bại".mysql_error($connect);
                }
         }
    }else if(isset($_POST['suadanhmucsp'])){
        $id = $_GET['iddanhmuc'];
        $tendanhmuc = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
       
        $sql_update = "UPDATE category SET tendanhmuc='".$tendanhmuc."',thutu='".$thutu."' WHERE id_danhmuc = '$id'";
        $query = mysqli_query($connect,$sql_update);
        if($query){
            header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
        }
        else{
            echo "Thất bại".mysql_error($connect);
    }
    }
    else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa="DELETE FROM category WHERE id_danhmuc='".$id."'";
            mysqli_query($connect,$sql_xoa);
            header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>
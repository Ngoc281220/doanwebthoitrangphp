<?php
       include("../../config/config.php");
       $masp = $_POST['masp'];
       $tensanpham = $_POST['tensanpham'];
       $gia = $_POST['gia'];
       $soluong = $_POST['soluong'];
       $hinhanh = $_FILES['hinhanh']['name'];
       $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
       $hinhanh = time().''.$hinhanh;
       $kichthuoc = $_POST['kichthuoc'];
       $mota = $_POST['mota'];
       $noidung = $_POST['noidung'];
       $tinhtrang = $_POST['tinhtrang'];
    
       if(isset($_POST['themsanpham'])){
            if(empty($masp) || empty($hinhanh)){
                echo '<script>alert("Không thể thêm sản phẩm")</script>';
                header('Location:../../index.php?action=quanlysanpham&query=them');
            }else{
             
                  $sql_inser = "INSERT INTO product( `ma_sp`, `tensanpham`, `giasp`, `soluong`, `hinhanh`, `kichthuoc`, `mota`, `noidung`, `tinhtrang`) 
                VALUES ('$masp','$tensanpham','$gia','$soluong','$hinhanh','$kichthuoc','$mota','$noidung','$tinhtrang')";
                $resrul = mysqli_query($connect,$sql_inser);
                  $folder = "uploads/".$hinhanh;
                  move_uploaded_file($hinhanh_tmp,$folder);
                if($resrul){
                    header('Location:../../index.php?action=quanlysanpham&query=them');
                }
              }
                
            
       }
       else if(isset($_POST['suasanpham'])){
          
          if(!empty($_FILES['hinhanh']['name'])){
            $id = $_GET['id_sp'];
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql_update = "UPDATE product SET masp = '".$masp."' ,tensanpham='".$tensanpham."',
            giasp ='". $gia."', soluong = '".$soluong."', hinhanh = '".$hinhanh."', kichthuoc = '".$kichthuoc."',
            mota = '".$mota."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."'WHERE id_sp = '$id '";
          
            $sql = "SELECT * FROM product WHERE id_sp = '$id' LIMIT 1";
            $query = mysqli_query($connect,$sql);
           while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
               }

          }else{
            $sql_update = "UPDATE product SET masp = '".$masp."' ,tensanpham='".$tensanpham."',
            giasp ='". $gia."', soluong = '".$soluong."',  kichthuoc = '".$kichthuoc."',
            mota = '".$mota."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."'WHERE id_sp = '$id '";
          }

            // mysqli_query($connect,$sql_update);
            // header('Location:../../index.php?action=quanlysanpham&query=them');
       }
?>
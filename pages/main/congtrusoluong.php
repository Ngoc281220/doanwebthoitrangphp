<?php
    session_start();
    // cộng số lượng giỏ hàng
    //  print_r($_SESSION['cart']);
    $product = $_SESSION['cart'];
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($product as $cart_item){
            if($cart_item['id']!=$id){
                $new_product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id']
                 ,'hinhanh'=>$cart_item['hinhanh'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'masp'=>$cart_item['masp']);
                 $_SESSION['cart'] = $new_product;
            }else{
                  $tangsoluong = $cart_item['soluong'] + 1;
                if($cart_item['soluong']<=9){
                    $new_product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id']
                    ,'hinhanh'=>$cart_item['hinhanh'],'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'masp'=>$cart_item['masp']);
                }else{
                    $new_product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id']
                 ,'hinhanh'=>$cart_item['hinhanh'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $new_product;
            }
        }
        header('location:../../index.php?quanly=giohang');
    }
    // Trừ số lượng gio hàng
    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($product as $cart_item){
            if($cart_item['id']!=$id){
                $new_product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id']
                 ,'hinhanh'=>$cart_item['hinhanh'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'masp'=>$cart_item['masp']);
                 $_SESSION['cart'] = $new_product;
            }
            else{
                $trusoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong']>1){
                    $new_product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id']
                 ,'hinhanh'=>$cart_item['hinhanh'],'soluong'=>$trusoluong,'giasp'=>$cart_item['giasp'],'masp'=>$cart_item['masp']);
                }else{
                    $new_product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id']
                 ,'hinhanh'=>$cart_item['hinhanh'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $new_product;
            }
        }
        header('location:../../index.php?quanly=giohang');
    }
?>

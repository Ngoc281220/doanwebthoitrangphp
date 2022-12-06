<div class="add">
    <p>Thêm sản phẩm</p>
        <table class="table" width="50%">
            <form method="POST" action="modules/Quanlysanpham/xuly.php" enctype="multipart/form-data">
                <tbody>
                    <tr>
                        <td>MaSP</td>
                        <td><input type="text" name="masp"></td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td><input type="text" name="tensanpham"></td>
                    </tr>
                    <tr>
                        <td>Gía</td>
                        <td><input type="text" name="gia"></td>
                    </tr>
                    <tr>
                        <td>Số lượng</td>
                        <td><input type="text" name="soluong"></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><input type="file" name="hinhanh"></td>
                    </tr>
                    <tr>
                        <td>Kích thước</td>
                        <td><input type="text" name="kichthuoc"></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td><textarea rows="10" name="mota" width="100%" style="resize: none;"></textarea></td>
                    </tr>
                    <tr>
                        <td>Nội dung</td>
                        <td><textarea rows="10" name="noidung" width="100%" style="resize: none;"></textarea></td>
                    </tr>
                    <tr>
                        <td>Tình trạng</td>
                        <td>
                            <select name="tinhtrang">
                                 <option value="1">Kích hoạt</option>
                                 <option value="0">Ân</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td  colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-primary"></td>
                    </tr>
                 </tbody>
            </form>
        </table>
</div>
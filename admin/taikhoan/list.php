
<footer class="main-footer">
<table class="table">
    <h1>Danh Sách Tài khoản</h1>
    <thead>
        <tr>
            <th></th>
            <th>Mã TK</th>
            <th>TÊN ĐĂNG NHẬP</th>
            <th>MẬT KHẨU</th>
            <th>EMAIL</th>
            <th>ĐỊA CHỈ</th>
            <th>ĐIỆN THOẠI</th>
            <th>VAI TRÒ</th>
            <!-- <th>Đơn giá</th>
            <th>Lượt xem</th>
            <th>Ngày đăng</th>
            <th>hành động</th> -->
        </tr>
        <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$user.'</td>
                <td>'.$pass.'</td>
                <td>'.$email.'</td>
                <td>'.$address.'</td>
                <td>'.$tel.'</td>
                <td>'.$role.'</td>
                <td><a href="'.$suatk.'"><input type="button" value="sửa" class="btn btn-danger text-white"> </a> <a href="'.$xoatk.'"> <input type="button" value="xoá" class="btn btn-danger text-white"> </a></td>
            </tr>';
            }
        ?>
    
    </tbody>
</table>
            <a href="../index.php?act=dangky"> <input type="button" value="Nhập Thêm" class="btn btn-danger text-white"> </a>
 </footer>

<footer class="main-footer">
<table class="table">
    <h1>Danh Sách Loại Hàng</h1>
    <thead>
        <tr>
            <th></th>
            <th>Mã Loại</th>
            <th>Tên Loại</th>
            <th></th>
            <!-- <th>Đơn giá</th>
            <th>Lượt xem</th>
            <th>Ngày đăng</th>
            <th>hành động</th> -->
        </tr>
        <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm="index.php?act=suadm&id=".$id;
                $xoadm="index.php?act=xoadm&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="" id="" class="btn btn-danger text-white"></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td><a href="'.$suadm.'"><input type="button" value="sửa" class="btn btn-danger text-white"> </a> <a href="'.$xoadm.'"> <input type="button" value="xoá" class="btn btn-danger text-white"> </a></td>
            </tr>';
            }
        ?>
    
    </tbody>
</table>
            <a href="index.php?act=adddm"> <input type="button" value="Nhập Thêm" class="btn btn-danger text-white"> </a>
 </footer>
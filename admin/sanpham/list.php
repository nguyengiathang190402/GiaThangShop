<footer class="main-footer">
<table class="table mb">
    <h1>Danh Sách Loại Hàng</h1>
    <thead>
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
                                
                foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="'.$id.'"> '.$name.'</option>';
                }
                                
            ?>
                                
        </select>
        <input type="submit" name="listok" value="GO">
        </form>
        <tr>
            <th></th>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình</th>
            <th>Đơn giá</th>
            <th>Lượt xem</th>
            <!-- <th>Ngày đăng</th> -->
            <th>Hành động</th>
        </tr>
        <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id;
                $xoasp="index.php?act=xoasp&id=".$id;
                $hinhpath="../upload/".$image;
                if(is_file($hinhpath)){
                    $hinh="<img src='".$hinhpath."' height='80'>";
                }
                // }else{
                //     $hinh="No photo";
                // }
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$hinh.'</td>
                <td>'.$pice.'</td>
                <td>'.$luotxem.'</td>
                <td><a href="'.$suasp.'"><input type="button" value="sửa" class="btn btn-danger text-white"> </a> <a href="'.$xoasp.'"> <input type="button" value="xoá" class="btn btn-danger text-white"> </a></td>
            </tr>';
            }
        ?>
    
    </tbody>
</table>
            <a href="index.php?act=addsp"> <input type="button" value="Nhập Thêm" class="btn btn-danger text-white"> </a>
 </footer>
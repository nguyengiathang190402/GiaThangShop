
<footer class="main-footer">
<table class="table">
    <h1>Danh Sách Bình Luận</h1>
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Người Bình Luận</th>
            <th>NỘI DUNG BÌNH LUẬN</th>
            <th>User</th>
            <th>Idpro</th>
            <th>Ngày bình luận</th>
            <th>Chức Năng</th>
            <!-- <th>Đơn giá</th>
            <th>Lượt xem</th>
            <th>Ngày đăng</th>
            <th>hành động</th> -->
        </tr>
        <?php foreach ($binhluan as $index => $u): ?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?= $index+1 ?></td>
                            <td><?= $u['nguoibinhluan'] ?></td>
                            <td style="max-width: 250px; overflow: hidden;"><?= $u['noidung'] ?></td>
                            <td><?= $u['iduser'] ?></td>
                            
                            
                            <td><?= $u['idpro'] ?></td>
                            <td><?= $u['ngaybinhluan'] ?></td>
                            
                            <td>
                            <a href="index.php?act=xoabl&id=<?=$u['id']?>"><input onclick="return Del()" class="btn btn-danger text-white" type="button" value="Xóa"></a>
                        </td>
                        </tr>
                        
                    <?php endforeach; ?>

    
    </tbody>
</table>
            <a href="../index.php?act=dangky"> <input type="button" value="Nhập Thêm"> </a>
 </footer>
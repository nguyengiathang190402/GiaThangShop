<?php
if(is_array($tk)){
    extract($tk);
}
?>
<footer class="main-footer">

<style>
    .btn-success {
        max-width: 103px !important;
    }
</style>

<div class="page-wrapper">
        <div class="card">
            <div class="card-header">
                <h2>Cập tài khoản khách hàng</h2>
            </div>
            <div class="card-body">
                <form action="index.php?act=updateur" method="post">
                <input type="hidden" value="<?= $users['id'] ?>" name="id">

                <div  class="form-group">
                    <label class="card-title" for="">Họ tên</label>
                    <input type="text" name="name" value="<?= $users['name'] ?>" class="form-control">
                </div>

                <div  class="form-group">
                    <label class="card-title" for="">Email</label>
                    <input type="email" name="email" value="<?= $users['email'] ?>" class="form-control">
                </div>

                <div  class="form-group">
                    <label class="card-title" for="">Phone</label>
                    <input type="number" name="phone" value="<?= $users['phone'] ?>" class="form-control">
                </div>

                <div  class="form-group">
                    <label class="card-title" for="">Địa chỉ</label>
                    <input type="text" name="diachi" value="<?= $users['diachi'] ?>" class="form-control">
                </div>

                <div  class="form-group">
                    <label class="card-title" for="">Vai trò</label>
                    <select name="role">
                        <option name="role" value="0" selected>Người dùng</option>
                        <option name="role"  value="1">Admin</option>
                    </select>
                </div>

                    <input class="btn btn-success text-white" name="capnhat" type="submit" value="Cập nhật">
                    <input class="btn btn-success text-white" type="reset" value="Nhập lại">
                    <a href="index.php?act=user"><input class="btn btn-success text-white" type="button" value="Danh sách"></a>
                    <br>
                <?php  
                     if(isset($thongbao) &&($thongbao!="")) echo $thongbao;
                ?>
              </form>
            </div>
        </div>
    </div>
</footer>
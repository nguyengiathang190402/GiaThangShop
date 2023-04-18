
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['tensp'])){
        $error = "Nhập vào tên danh mục";
    }
}

?>
<footer class="main-footer">
<article>
            <div class="headline">
                <h2>THÊM MỚI SẢN PHẨM</h2>
            </div>
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="column">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Danh mục</label>
                            <select name="iddm">
                                <?php
                                
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'"> '.$name.'</option>';
                                }
                                
                                ?>
                                
                            </select>
                            <input class="form-control" type="text" name="masp" readonly placeholder="auto number"
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên Sản Phẩm</label>
                            <input class="form-control" type="text" name="tensp" placeholder="tên hàng">
                            <span style="color:red;"><?php if(isset($error)) echo $error ;?></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input class="form-control" type="number" name="giasp" min="0" value="0">
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="">Loại hàng</label>
                            <select class="form-control" name="ma_loai" id="">
                                <option value="">Mã loại</option>
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="">Hàng đặc biệt</label>
                            <div class="form-special">
                                <input type="radio" name="dac_biet" value="1"> Đặc biệt
                                <input type="radio" name="dac_biet" value="0" checked> Bình thường
                            </div>
                        </div>
                    </div> -->
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hình</label>
                            <input type="file" name="hinh" placeholder="">
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm">
                        </div>
                    </div> -->
                    <div class="full">
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="mota"></textarea>
                        </div>
                    </div>

                </div>
                
                <div class="col">
                <div class="form-group">
                <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-danger text-white"></input>
                <button type="submit" class="btn btn-danger text-white"><a href="index.php?act=listsp">Danh sách</a></button>
                </div>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>

            </form>
        </article>
</footer>
<?php
if(is_array($dm)){
    extract($dm);
}
?>
<footer class="main-footer">
<article>
            <div class="headline">
                <h2>Cập Nhật Loại Hàng</h2>
            </div>
            <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php if (isset($id)&&($id!="")); echo $id;?>">
                <div class="column">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã Loại</label>
                            <input class="form-control" type="text" name="maloai" readonly placeholder="auto number"
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên Loại</label>
                            <input class="form-control" type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")); echo $name ;?>" placeholder="tên hàng">
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input class="form-control" type="number" name="don_gia" min="0" value="0">
                        </div>
                    </div> -->
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
                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="">Hình</label>
                            <input type="file" name="hinh" placeholder="">
                        </div>
                    </div> -->
                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm">
                        </div>
                    </div> -->
                    <!-- <div class="full">
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="mo_ta"></textarea>
                        </div>
                    </div>

                </div> -->
                
                <div class="col">
                <div class="form-group">
                
                <input  type="submit" name="capnhat" value="Cập Nhật" class="btn btn-danger text-white"></input>
                <button type="submit" class="btn btn-danger text-white"><a href="index.php?act=listdm" >Danh sách</a></button>
                </div>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>

            </form>
        </article>
</footer>
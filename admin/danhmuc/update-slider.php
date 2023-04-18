<?php
if(is_array($dm)){
    extract($dm);
}
?>
<footer class="main-footer">
<article>
            <div class="headline">
                <h2>Cập Nhật Slider</h2>
            </div>
            <form action="index.php?act=updatesl" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php if (isset($id)&&($id!="")) echo $id;?>">
                <div class="column">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã Slider</label>
                            <input class="form-control" type="text" name="maslider" readonly
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tiêu Đề</label>
                            <input class="form-control" type="text" name="tieude" >
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nội Dung</label>
                            <input class="form-control" type="text" name="noidung" >
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hình</label>
                            <input type="file" name="image" >
                        </div>
                    </div>
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
                
                <input  type="submit" name="capnhat" value="Cập Nhật"></input>
                <button type="submit"><a href="index.php?act=listsl">Danh sách</a></button>
                </div>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>

            </form>
        </article>
</footer>
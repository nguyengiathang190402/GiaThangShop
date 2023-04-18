<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$image;
    if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
    }
                // }else{
                //     $hinh="No photo";
                // }
?>
<footer class="main-footer">
<article>
            <div class="headline">
                <h2>Cập Nhật Loại Hàng</h2>
            </div>
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php if (isset($id)&&($id!="")) echo $id;?>">
            
                <div class="column">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã sản phẩm</label>
                            <input class="form-control" type="text" name="masp" readonly placeholder="auto number"
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên Sản Phẩm</label>
                            <input class="form-control"  type="text" name="tensp" value="<?=$name?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input class="form-control" type="number" name="giasp" value="<?=$price?>">
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
                            <?=$hinh?>
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
                            <textarea name="mota" ><?=$mota?></textarea>
                        </div>
                    </div>
                    <select name="iddm">
            <option value="0" selected>Tất cả</option>

            <?php
                                
                foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                if($iddm==$id) $s="selected"; else $s="";
                echo '<option value="'.$id.'" '.$s.'> '.$name.'</option>';
                }
                                
            ?>
                                
        </select>

                </div>
                
                <div class="col">
                <div class="form-group">
                <input type="submit" name="capnhat" value="Cập Nhật" class="btn btn-danger text-white"></input>
                <input type="reset" value="Nhập Lại" class="btn btn-danger text-white"></input>

                <a href="index.php?act=listsp"><input type="button" value="danh sách" class="btn btn-danger text-white"></a>
                </div>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>

            </form>
        </article>
</footer>
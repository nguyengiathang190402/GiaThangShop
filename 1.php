
<style>
    .btn-success {
        max-width: 103px !important;
    }
</style>

<div class="page-wrapper">
        <div class="card">
            <div class="card-header">
                <h2>Cập nhật Slide</h2>
            </div>
            <div class="card-body">
                <form action="index.php?act=updatesl" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?= $slider['id'] ?>" name="id">


                <div  class="form-group">
                    <label class="card-title"  for="">Tiêu đề 1</label>
                     <input type="text" value="<?= $slider['titleh5'] ?>" name="titleh5" class="form-control">
                </div>

                <div  class="form-group">
                    <label class="card-title"  for="">Tiêu đề 2</label>
                     <input type="text" value="<?= $slider['titleh2'] ?>" name="titleh2" class="form-control">
                </div>

                <div  class="form-group">
                    <label class="card-title"  for="">Mô tả</label>
                     <textarea name="noidung"  class="form-control ps-0 form-control-line" cols="30" rows="10"><?= $slider['noidung'] ?></textarea>
                </div>

                <div  class="form-group">
                    <label class="card-title" for="">Ảnh</label>
                     <input type="file" name="image" class="form-control">
                     <?php 
                        $hinhpath = "../uploads/".$slider['image'];
                        if(is_file($hinhpath)){
                            $hinh = "<img  src='".$hinhpath."' width='400px' >";
                        }else {
                            $hinh = "no photo";
                        }
 
                     ?>
                        <div>
                            <?= $hinh ?>;
                        </div>
                </div>
                <br>

                
                <input class="btn btn-success text-white" name="capnhatsl" type="submit" value="Cập nhật">
                <input class="btn btn-success text-white" name="xoaall" type="reset" value="Nhập lại">
                <a href="index.php?act=slider"><input class="btn btn-success text-white" type="button" value="Danh sách"></a>
                <br>

                <?php  
                     if(isset($thongbao) &&($thongbao!="")) echo $thongbao;
                ?>
              </form>
            </div>
        </div>
    </div>
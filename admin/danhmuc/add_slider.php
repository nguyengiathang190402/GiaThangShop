<footer class="main-footer">

<style>
    .btn-success {
        max-width: 103px !important;
    }
</style>

<div class="page-wrapper">
        <div class="card">
            <div class="card-header">
                <h2>Thêm Slide</h2>
            </div>
            <div class="card-body">
                <form action="index.php?act=addslider" method="post" enctype="multipart/form-data">


                <div  class="form-group">
                    <label class="card-title" for="">Tiêu đề 1</label>
                     <input type="text" name="titleh5" class="form-control">
                </div>

                <div  class="form-group">
                    <label class="card-title" for="">Tiêu đề 2</label>
                     <input type="text" name="titleh2" class="form-control">
                </div>

                <div  class="form-group">
                    <label class="card-title" for="">Mô tả</label>
                     <textarea class="form-control ps-0 form-control-line" name="noidung" cols="30" rows="10"></textarea>
                </div>

                <div  class="form-group">
                    <label class="card-title" for="">Ảnh</label> <br>
                     <input type="file" name="image" class="form-control-file">
                </div>

                <input class="btn btn-success text-white" name="themslide" type="submit" value="Thêm mới">
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
</footer>

<footer class="main-footer">
<style>
    td, th {
        text-align: center !important;
    }
    .tieude{
        max-width: 200px !important;
        overflow: hidden;
    }
</style>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Slider</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php?act=index">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Slider</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Danh Sách slider</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0"></th>
                                                <th class="border-top-0">STT</th>
                                                <th class="border-top-0">Tiêu đề 1</th>
                                                <th class="border-top-0">Tiêu đề 2</th>
                                                <th class="border-top-0">Mô tả</th>
                                                <th class="border-top-0">Ảnh</th>
                                                <th class="border-top-0"><a class="btn btn-success text-white" href="index.php?act=addslider">Thêm slide</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($slider as $index => $u): ?>
                                                <tr>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td><?= $index+1 ?></td>
                                                    <td class="tieude"><?= $u['titleh5'] ?></td>
                                                    <td class="tieude"><?= $u['titleh2'] ?></td>
                                                    <td class="tieude"><?= $u['noidung'] ?></td>
                                                    <td>
                                                        <?php 
                                                        $hinhpath = "../upload/".$u['image'];
                                                        if(is_file($hinhpath)){
                                                            $hinh = "<img  src='".$hinhpath."' width='120px' >";
                                                        }else {
                                                            //$hinh = "no photo";
                                                        }
                                    
                                                        ?>
                    
                                                        <?=$hinh ?>
                                                    </td>
                                                    <td>
                                                    <a href="index.php?act=suasl&id=<?=$u['id']?>"><input class="btn btn-danger text-white" type="button" value="Sửa"></a>
                                                    <a href="index.php?act=xoasl&id=<?=$u['id']?>"><input onclick="return Del()" class="btn btn-danger text-white" type="button" value="Xóa"></a>
                                                </td>
                                                </tr>
                                                
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function Del(){
                        return confirm("Bạn có muốn xóa ");
                    }
                        </script>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
 </footer>
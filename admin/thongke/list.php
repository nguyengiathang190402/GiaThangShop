<footer class="main-footer">
<div class="title">
                <h1>Bảng Thống Kê</h1>
            </div>

            <div class="content">
                <table class="table" style="text-align: center; margin: auto" border="1" cellspacing="7">
                    <tr>

                    <th>Mã Danh mục</th>
                    <th>Tên Danh mục</th>
                    <th>Số Lượng</th>
                    <th>Giá Cao Nhất</th>
                    <th>Giá Thấp nhất</th>
                    <th>Giá Trung Bình</th>
                  </tr>
                    <?php 
                     foreach ($listthongke as $thongke){
                       extract($thongke);
                    echo '<tr>
                            
                            <td>'.$madm. '</td>
                            <td>' .$tendm. '</td>
                            <td>' .$countsp. '</td>
                            <td>' .$maxprice. '</td>
                            <td>' .$minprice. '</td>
                            <td>' .$avgprice. '</td>

                            
                        </tr>';
                  }
                  ?>
                </table>
                <div id="buttontk">
                <button type="submit" class="btn btn-danger text-white"><a href="index.php?act=bieudo" >Biểu Đồ</a></button>
                
                </div>

                
            
                
       </div>

       </footer>
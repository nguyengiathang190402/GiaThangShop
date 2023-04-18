<?php
    include "../model/pdo.php";
	include "header.php";
	include "../model/sanpham.php";
	include "../model/danhmuc.php";
	include "../model/taikhoan.php";
	include "../model/binhluan.php";
	include "../model/cart.php";
	

	if (isset($_GET['act'])) {
		$act = $_GET['act'];

	    switch ($act) {
		  case 'adddm':
			//kiểm tra xem người dùng có click vào nút add hay k
			if(isset($_POST['btn_insert'])&&($_POST['btn_insert'])){
                $tenloai=$_POST['tenloai'];
				insert_danhmuc($tenloai);
				$thongbao="Thêm thành công";

			}
			include "danhmuc/add.php";
			break;
          case 'listdm':
			$listdanhmuc=loadall_danhmuc();
             include "danhmuc/list.php";
             break;
		  case  'xoadm' :
			if(isset($_GET['id'])&&($_GET['id']>0)){
			 delete_danhmuc($_GET['id']);
			}
            $listdanhmuc=loadall_danhmuc();
             include "danhmuc/list.php";
             break;
		  case 'suadm' :
			if(isset($_GET['id'])&&($_GET['id']>0)){
			    $dm=loadone_danhmuc($_GET['id']);	
			}
			
			include "danhmuc/update.php";
            break;
			case 'updatedm' :
				if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
					$tenloai=$_POST['tenloai'];
					$id=$_POST['id'];
					update_danhmuc($id,$tenloai);
					$thongbao="Cập nhật thành công";
	
				}
				$sql="select * from danhmuc order by id desc";
			    $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;
				/* controntroller sản phẩm */
				case 'addsp':
					//kiểm tra xem người dùng có click vào nút add hay k
					if(isset($_POST['btn_insert'])&&($_POST['btn_insert'])){
						$iddm=$_POST['iddm'];
						$tensp=$_POST['tensp'];
						$giasp=$_POST['giasp'];
						$mota=$_POST['mota'];
						$hinh=$_FILES['hinh']['name'];
						$target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
						if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
							//echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
						} else {
							//echo "Sorry, there was an error uploading your file.";
						}
						insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
						$thongbao="Thêm thành công";
		
					}
					$listdanhmuc=loadall_danhmuc();
					//var_dump($listdanhmuc);
					include "sanpham/add.php";
					break;
				case 'listsp':
					if(isset($_POST['listok'])&&($_POST['listok'])){
						$kyw=$_POST['kyw'];
						$iddm=$_POST['iddm'];
					}
					    $listdanhmuc=loadall_danhmuc();
					    $listsanpham=loadall_sanpham($kyw,$iddm);
					    include "sanpham/list.php";
					    break;
				case  'xoasp' :
					if(isset($_GET['id'])&&($_GET['id']>0)){
					    delete_sanpham($_GET['id']);
					}
					    $listsanpham=loadall_sanpham("",0);
					    include "sanpham/list.php";
					    break;
				case 'suasp' :
					if(isset($_GET['id'])&&($_GET['id']>0)){
						$sanpham=loadone_sanpham($_GET['id']);	
					}
					    $listdanhmuc=loadall_danhmuc();
					    include "sanpham/update.php";
					    break;
				case 'updatesp' :
						if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
						$id=$_POST['id'];
						$iddm=$_POST['iddm'];
						$tensp=$_POST['tensp'];
						$giasp=$_POST['giasp'];
						$mota=$_POST['mota'];
						$hinh=$_FILES['hinh']['name'];
						$target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
						if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
							//echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
						} else {
							//echo "Sorry, there was an error uploading your file.";
						}
							update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,);
							$thongbao="Cập nhật thành công";
			
						}
						$listdanhmuc=loadall_danhmuc();
						$listsanpham = loadall_sanpham("", 0);
						include "sanpham/list.php";
						break;
					case  'dskh' :
							$listtaikhoan=loadall_taikhoan();
							include "taikhoan/list.php";
							break;
					case  'xoatk' :
						if(isset($_GET['id'])&&($_GET['id']>0)){
							delete_taikhoan($_GET['id']);
						}
							$listtaikhoan=loadall_taikhoan("",0);
							include "taikhoan/list.php";
							break;
					case 'suatk' :
						if(isset($_GET['id'])&&($_GET['id']>0)){
							$taikhoan=loadone_taikhoan($_GET['id']);	
						}
							$listtaikhoan=loadall_taikhoan();
							include "taikhoan/update.php";
							break;
					case 'updatetk' :
						if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
						$id=$_POST['id'];
						$user=$_POST['user'];
						$pass=$_POST['pass'];
						$email=$_POST['email'];
						$address=$_POST['address'];
                        $tel=$_POST['tel'];
						$role=$_POST['role'];
						
						update_taikhoan($id,$user,$pass,$email,$address,$tel,$role);
						$thongbao="Cập nhật thành công";
		
					}
					$listtaikhoan=loadall_taikhoan();
					
					include "taikhoan/list.php";
					break;
					case "dsbl": {
						$binhluan = loadList_binhluan();
						include "binhluan/list.php";
						break;
					}
		
					case 'xoabl':
						if (isset($_GET['id']) && $_GET['id'] > 0) {
							delete_binhluan($_GET['id']);
							$binhluan = loadList_binhluan();
						}
						include "binhluan/list.php";
						break;		
						case 'thongke':
							$listthongke=loadall_thongke();
							include "thongke/list.php";
							break;
						case 'bieudo':
							$listthongke=loadall_thongke();
							include "thongke/bieudo.php";
							break;
					case 'slider':

						$slider = load_slider();
						include "danhmuc/slider.php";
						break;
		
					case "addslider":
						if(isset($_POST['themslide']) && ($_POST['themslide'])){
							$titleh5 = $_POST["titleh5"];
							$titleh2 = $_POST["titleh2"];
							$noidung = $_POST["noidung"];
							$image = $_FILES["image"];
							$filename = "";
							if ($image['size'] > 0) {
								$filename = uniqid() . '-' . $image['name'];
								move_uploaded_file($image['tmp_name'], '../upload/' . $filename);
							}
		
							add_slider($titleh5,$titleh2,$noidung,$filename);
							$thongbao = "Thêm Thành Công";
						}
		
						include "danhmuc/add_slider.php";
						break;
		
						case "xoasl": {
							if (isset($_GET['id']) && $_GET['id'] > 0) {
								delete_slider($_GET['id']);
							}
							$slider = load_slider();
							include "danhmuc/slider.php";
							break;
						}
						case "suasl": {
							if (isset($_GET['id']) && $_GET['id'] > 0) {
								$slider = loadOne_slider($_GET['id']);
							}
							include "danhmuc/suaslider.php";
							break;
						}
						case "updatesl":
							if (isset($_POST["capnhat"]) && $_POST["capnhat"]){
								$id = $_POST["id"];
								$slider = loadOne_slider($id);
								$titleh5 = $_POST["titleh5"];
								$titleh2 = $_POST["titleh2"];
								$noidung = $_POST["noidung"];
		
								$image = $_FILES['image'];
								$imgValue = $slider['image'];
								
								
								if ($image['size'] > 0) {
									$filename = uniqid() . '-' . $image['name'];
									move_uploaded_file($image['tmp_name'], '../upload/' . $filename);
									$imgValue = $filename;
								}
		
								update_slider($id,$titleh5, $titleh2, $noidung, $imgValue);
							
							}
		
							$slider = load_slider();
							header('Location: index.php?act=slider');
							break;
		
	default:
			require('home.php');
			break;
	}
    }else {
        include "home.php";
    }

	include('footer.php');
?>
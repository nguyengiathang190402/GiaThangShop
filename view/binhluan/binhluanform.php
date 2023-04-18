<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro=$_REQUEST['idpro'];
$dsbl=loadall_binhluan($idpro);
?>
<style>
 
   .binhluan table{
    width: 90%;
    padding-bottom: 30%;
    margin-bottom: 20%;
    
  }
  .binhluan table td:nth-child(1){
    width: 50%;
    padding-bottom: 3%;
  }
  .binhluan table td:nth-child(2){
    width: 20%;
    padding-bottom: 3%;
  }
  .binhluan table td:nth-child(3){
    width: 30%;
    padding-bottom: 3%;
  }
  
</style>
<div class="tab-content-wrap">
      <div class="tab-content" id="Descraption">
      
                  <ul>
                    <li>
                    <h3 class="title">
                  Bình Luận
                </h3>
                    </li>
                    
                  
                  <div class="boxcontent2 binhluan">
                    <table >
                   
                    
                   <?php
                   foreach ($dsbl as $bl){
                     extract($bl);
                     echo '<tr><td>'.$nguoibinhluan.'</td>';
                     echo '<td>'.$noidung.'</td>';
                     
                     echo '<td>'.$ngaybinhluan.'</td>';
                     
                     
                   }
                   
                   
                   ?>
                </table>
                </div>
                  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    
                  <?php
                    echo "Đánh giá của bạn :";
                    ?>
                             
                        <?php if (isset($_SESSION['user'])) : ?>
                        <input type="text" name="noidung">
                        <input type="submit" value="Gửi bình luận" class="button" name="guibinhluan">
                        <?php else : ?>
                        <label for="comment-review-text">Đăng nhập để bình luận <span>*</span></label>
                        <?php endif; ?>
                    </form>
                
                  </div>
                  <?php
                  if(isset($_POST['guibinhluan']) && $_POST['guibinhluan']){
                    $nguoibinhluan=$_SESSION['user']['name'];
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['user']['id'];
                    $ngaybinhluan=date('h:i:sa d/m/Y');
                  insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan,$nguoibinhluan);
                  header("Location: ".$_SERVER['HTTP_REFERER']);
                  }
                  ?>
                </div>
              </div>
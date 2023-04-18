<?php
session_start();
if(isset($_SESSION['mycart'])){
    foreach ($_SESSION['mycart'] as $cart) {
        echo "MÃ sp: ".$cart[0];
        echo "Tên sp: ".$cart[1];
        echo "Giá sp: ".$cart[2];
        echo "Số lượng: ".$cart[3]."<br>";
    }
    echo '<h1>Session đã show</h1>';

}else{
    echo '<h1>Session đã bị huỷ</h1>';


}
echo '<h1>Session đã show</h1>';
echo '<a href="1.php"> Khởi tạo <a/>';
echo '<a href="3.php"> Huỷ session <a/>';
?>
<?php
        session_start();
        session_destroy();
        echo '<h1>Session đã huỷ</h1>';
        echo '<a href="1.php"> Khởi tạo <a/>';
        echo '<a href="3.php"> Huỷ session <a/>';

?>
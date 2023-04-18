<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan,$nguoibinhluan){
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan,nguoibinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan','$nguoibinhluan')";
	exeQuery($sql, false);
}
function loadAll_binhluan($idpro) {
    $sql = "Select * from binhluan where idpro='" . $idpro . "'";
    $binhluan = exeQuery($sql, true);
    return $binhluan;
}
function delete_binhluan($id){
    $sql="delete from binhluan where id=".$id;
	pdo_execute($sql);
    
}
function loadList_binhluan() {
    $sql = "Select * from binhluan order by id desc";
    $binhluan = exeQuery($sql, true);
    return $binhluan;
}
function get_name_binhluan($iduser){
    $sql="select * taikhoan where id=".$iduser;
    $binhluan = exeQuery($sql, false);
    return $binhluan;
}
?>
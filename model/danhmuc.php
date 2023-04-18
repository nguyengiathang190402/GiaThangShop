<?php
function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(name) values('$tenloai')";
	pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
	pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";
	$listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="select * from danhmuc where id=".$id;
	$dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql="update danhmuc set name='".$tenloai."' where id=".$id;
	pdo_execute($sql);
}
function load_slider(){
    $sql = "Select * from slider order by id desc";
    $slider = exeQuery($sql,true);
    return $slider;
}

function add_slider($titleh5,$titleh2,$noidung,$filename){
    $sql = "INSERT INTO slider(titleh5, titleh2, noidung, image) VALUES('$titleh5','$titleh2','$noidung','$filename')";
    exeQuery($sql,false);
}

function delete_slider($id){
    $sql = "DELETE FROM slider WHERE id =".$id;
    exeQuery($sql);
}
function loadOne_slider($id){
    $sql = "SELECT * FROM slider WHERE id=".$id;
    $slider = exeQuery($sql,false);
    return $slider;
}
function update_slider($id,$titleh5, $titleh2, $noidung, $imgValue){
    $sql = "UPDATE slider SET titleh5 = '$titleh5',
    titleh2 = '$titleh2',
    noidung = '$noidung',
    image = '$imgValue' WHERE id=" . $id;
exeQuery($sql, false);
}
?>
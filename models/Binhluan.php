<?php 
function insertBinhluan($id_bl,$noidung_bl,$id_sp,$id_khachhang,$ngay_bl)
{
  $sql="INSERT INTO binh_luan(id_bl,noidung_bl,id_sp,id_khachhang,ngay_bl) VALUES('$id_bl','$noidung_bl','$id_sp','$id_khachhang','$ngay_bl')";
  pdo_execute($sql);
}
function loadbl_binhluan($id_sp){
  $sql ="SELECT * FROM binh_luan where 1";
  if($id_sp > 0 ){
      $sql .=" AND id_sp='".$id_sp."'";
  }
  else{
      $sql .=" ORDER BY id desc ";
  }
  $loadbl = pdo_query($sql);
  return $loadbl;
}
function deleteBinhluan($id_bl) { 
  $sql = "DELETE FROM binh_luan WHERE id_bl=" .$id_bl;
  pdo_execute($sql);
} 
?>

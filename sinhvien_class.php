<?php
class sinhvien {
  // Properties
  public $name;
  public $ngaysinh;
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

 function ns($ngaysinh) {
    $this->ngaysinh = $ngaysinh;
  }
  function ngaysinh() {
    return $this->ngaysinh;
  }
  }
function tinhtuoi($tuoi)
{
    $tg = @date_diff(date_create($tuoi), date_create('today'));
    return $tg->format('%y');
}
$mssv = new sinhvien();
$hoten = new sinhvien();
$ngaysinh = new sinhvien();
$mssv->set_name('B1906327');
$hoten->set_name('Nguyen Thi Huynh Nga');
$ngaysinh->ns('17-07-2001');
echo 'Ma so sinh vien: '.$mssv->get_name();
echo "<br>";
echo 'Ho va ten: '.$hoten->get_name();
echo "<br>";
echo 'Ngay sinh: '.$ngaysinh->ngaysinh();
echo "<br>";
echo 'Tuoi: '.tinhtuoi('17-07-2001');
?>
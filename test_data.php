<?php
error_reporting(0);
$koneksi = mysqli_connect("localhost", "root", "", "call_center");

$sql = "SELECT no_hp, follow_up FROM tbl_accident_fu_800l ORDER BY date DESC LIMIT 1";

$response = array();
$posts = array();
$result = mysqli_query($koneksi, $sql);

while($row=mysqli_fetch_array($result)) { 
  $phone=$row['no_hp'];
  $fu=$row['follow_up'];  
}
 

$posts = array('no_hp'=> $phone, 'follow_up'=> $fu);

echo "Timer Call Center Array Json to Arduino";

$fp = fopen('test_data.json', 'w');
fwrite($fp, json_encode($posts));
fclose($fp);

header("Refresh: 1;url='test_data.php'");

?>
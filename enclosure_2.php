<?php
require 'koneksi.php';
//SERVER DATA-CENTRE

$ipserver = "SELECT ip_address,server FROM ip_server_kybi WHERE id_server='5'";
        $result_ip = mysqli_query($conn, $ipserver);
        $data_ipserver = mysqli_fetch_array($result_ip);

$ip = $data_ipserver['ip_address'];
$nama_server = $data_ipserver['server'];

exec("ping $ip", $output, $status);

if ($status == 1) {
    $server_1 = "Request Time Out";
    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d H:i:s');

    $queryip = "INSERT INTO tbl_accident (ip_address, date, server, status) VALUES ('$ip','$date','$nama_server','$server_1')";
    $resultip = mysqli_query($conn, $queryip);

    $server1 = "SELECT * FROM tbl_accident_fu_mcu WHERE ip_address='$ip' ORDER BY date DESC";
    $result1 = mysqli_query($conn, $server1);
    $data_server1 = mysqli_fetch_array($result1);

    if(empty($data_server1['ip_address']) || $data_server1['follow_up'] == '1' && $data_server1['nt'] == '1' && $data_server1['rs'] == '1' || $data_server1['follow_up'] == '0' && $data_server1['npk'] == '01934'){


        $karyawan = "SELECT npk, no_hp, sequence FROM pic_server WHERE npk = '01563'";
        $result_k = mysqli_query($conn, $karyawan);
        $data_karyawan = mysqli_fetch_array($result_k);

        $npk1 = $data_karyawan['npk'];
        $nohp1 = $data_karyawan['no_hp'];
        $status = 0;
        $query2 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk1','$nohp1','$ip','$date','$status','$server_1')";
        $result2 = mysqli_query($conn, $query2);

        $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk1','$nohp1','$ip','$date','$status','$server_1')";
        $result_800l = mysqli_query($conn, $query_800l);

}
else if ($data_server1['npk'] == '01563' && $data_server1['follow_up'] == 0 && $data_server1['ip_address'] == '192.168.10.30') {

    $karyawan = "SELECT npk, no_hp, sequence FROM pic_server WHERE npk = '01314'";
        $result_k = mysqli_query($conn, $karyawan);
        $data_karyawan = mysqli_fetch_array($result_k);

        $npk2 = $data_karyawan['npk'];
        $nohp2 = $data_karyawan['no_hp'];
        $status2 =  0;

        $query3 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk2','$nohp2','$ip','$date','$status2','$server_1')";
        $result3 = mysqli_query($conn, $query3);

        $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk2','$nohp2','$ip','$date','$status2','$server_1')";
        $result_800l = mysqli_query($conn, $query_800l);

}
else if ($data_server1['npk'] == '01314' && $data_server1['follow_up'] == 0 && $data_server1['ip_address'] == '192.168.10.30') {

    $karyawan = "SELECT npk, no_hp, sequence FROM pic_server WHERE npk = 'P1074'";
        $result_k = mysqli_query($conn, $karyawan);
        $data_karyawan = mysqli_fetch_array($result_k);

        $npk3 = $data_karyawan['npk'];
        $nohp3 = $data_karyawan['no_hp'];
        $status3 =  0;

        $query4 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk3','$nohp3','$ip','$date','$status3','$server_1')";
        $result4 = mysqli_query($conn, $query4);

        $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk3','$nohp3','$ip','$date','$status3','$server_1')";
        $result_800l = mysqli_query($conn, $query_800l);

}
else if ($data_server1['npk'] == 'P1074' && $data_server1['follow_up'] == 0 && $data_server1['ip_address'] == '192.168.10.30') {

    $karyawan = "SELECT npk, no_hp, sequence FROM pic_server WHERE npk = '01934'";
        $result_k = mysqli_query($conn, $karyawan);
        $data_karyawan = mysqli_fetch_array($result_k);

        $npk4 = $data_karyawan['npk'];
        $nohp4 = $data_karyawan['no_hp'];
        $status4 =  0;

        $query5 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk4','$nohp4','$ip','$date','$status4','$server_1')";
        $result5 = mysqli_query($conn, $query5);

        $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk4','$nohp4','$ip','$date','$status4','$server_1')";
        $result_800l = mysqli_query($conn, $query_800l);

}
else if ($data_server1['npk'] == '01934' && $data_server1['follow_up'] == 0 && $data_server1['ip_address'] == '192.168.10.30') {
    
    $karyawan = "SELECT npk, no_hp, sequence FROM pic_server npk = '01563'";
    $result_k = mysqli_query($conn, $karyawan);
    $data_karyawan = mysqli_fetch_array($result_k);

    $npk1 = $data_karyawan['npk'];
    $nohp1 = $data_karyawan['no_hp'];
    $status = 0;

    $query2 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk1','$nohp1','$ip','$date','$status','$server_1')";
    $result2 = mysqli_query($conn, $query2);

    $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk1','$nohp1','$ip','$date','$status','$server_1')";
    $result_800l = mysqli_query($conn, $query_800l);
}

}
    else if ($status == 2) {
        $server_1 = "Network Error";
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');

        $queryip = "INSERT INTO tbl_accident (ip_address, date) VALUES ('$ip','$date')";
        $resultip = mysqli_query($conn, $queryip);

        $server1 = "SELECT * FROM tbl_accident_fu_mcu WHERE ip_address='$ip' ORDER BY date DESC";
        $result1 = mysqli_query($conn, $server1);
        $data_server1 = mysqli_fetch_array($result1);
    
        if(empty($data_server1['ip_address']) || $data_server1['follow_up'] == '1' && $data_server1['nt'] == '1' && $data_server1['rs'] == '1' || $data_server1['follow_up'] == '0' && $data_server1['npk'] == '01934'){


            $karyawan = "SELECT npk, no_hp, sequence FROM pic_server WHERE npk = '01563'";
            $result_k = mysqli_query($conn, $karyawan);
            $data_karyawan = mysqli_fetch_array($result_k);
    
            $npk1 = $data_karyawan['npk'];
            $nohp1 = $data_karyawan['no_hp'];
            $status = 0;
            $query2 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk1','$nohp1','$ip','$date','$status','$server_1')";
            $result2 = mysqli_query($conn, $query2);
    
            $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk1','$nohp1','$ip','$date','$status','$server_1')";
            $result_800l = mysqli_query($conn, $query_800l);
    
    }
    else if ($data_server1['npk'] == '01563' && $data_server1['follow_up'] == 0 && $data_server1['ip_address'] == '192.168.10.30') {
    
        $karyawan = "SELECT npk, no_hp, sequence FROM pic_server WHERE npk = '01314'";
            $result_k = mysqli_query($conn, $karyawan);
            $data_karyawan = mysqli_fetch_array($result_k);
    
            $npk2 = $data_karyawan['npk'];
            $nohp2 = $data_karyawan['no_hp'];
            $status2 =  0;
    
            $query3 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk2','$nohp2','$ip','$date','$status2','$server_1')";
            $result3 = mysqli_query($conn, $query3);
    
            $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk2','$nohp2','$ip','$date','$status2','$server_1')";
            $result_800l = mysqli_query($conn, $query_800l);
    
    }
    else if ($data_server1['npk'] == '01314' && $data_server1['follow_up'] == 0 && $data_server1['ip_address'] == '192.168.10.30') {
    
        $karyawan = "SELECT npk, no_hp, sequence FROM pic_server WHERE npk = 'P1074'";
            $result_k = mysqli_query($conn, $karyawan);
            $data_karyawan = mysqli_fetch_array($result_k);
    
            $npk3 = $data_karyawan['npk'];
            $nohp3 = $data_karyawan['no_hp'];
            $status3 =  0;
    
            $query4 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk3','$nohp3','$ip','$date','$status3','$server_1')";
            $result4 = mysqli_query($conn, $query4);
    
            $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk3','$nohp3','$ip','$date','$status3','$server_1')";
            $result_800l = mysqli_query($conn, $query_800l);
    
    }
    else if ($data_server1['npk'] == 'P1074' && $data_server1['follow_up'] == 0 && $data_server1['ip_address'] == '192.168.10.30') {
    
        $karyawan = "SELECT npk, no_hp, sequence FROM pic_server WHERE npk = '01934'";
            $result_k = mysqli_query($conn, $karyawan);
            $data_karyawan = mysqli_fetch_array($result_k);
    
            $npk4 = $data_karyawan['npk'];
            $nohp4 = $data_karyawan['no_hp'];
            $status4 =  0;
    
            $query5 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk4','$nohp4','$ip','$date','$status4','$server_1')";
            $result5 = mysqli_query($conn, $query5);
    
            $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk4','$nohp4','$ip','$date','$status4','$server_1')";
            $result_800l = mysqli_query($conn, $query_800l);
    
    }
    else if ($data_server1['npk'] == '01934' && $data_server1['follow_up'] == 0 && $data_server1['ip_address'] == '192.168.10.30') {
        
        $karyawan = "SELECT npk, no_hp, sequence FROM pic_server npk = '01563'";
        $result_k = mysqli_query($conn, $karyawan);
        $data_karyawan = mysqli_fetch_array($result_k);
    
        $npk1 = $data_karyawan['npk'];
        $nohp1 = $data_karyawan['no_hp'];
        $status = 0;
    
        $query2 = "INSERT INTO tbl_accident_fu_mcu (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk1','$nohp1','$ip','$date','$status','$server_1')";
        $result2 = mysqli_query($conn, $query2);
    
        $query_800l = "INSERT INTO tbl_accident_fu_800l (server,npk,no_hp,ip_address,date,follow_up, status) VALUES ('$nama_server','$npk1','$nohp1','$ip','$date','$status','$server_1')";
        $result_800l = mysqli_query($conn, $query_800l);
    }
    }

//header("Refresh: 300;url='ping_data_centre.php'");
   
?>
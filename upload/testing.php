<?php
// menghubungkan dengan koneksi
include '../libs/db_connection.php';
// menghubungkan dengan library excel reader
include "../libs/excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['filetesting']['name']);
move_uploaded_file($_FILES['filetesting']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filetesting']['name'], 0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filetesting']['name'], false);
// $data = new Spreadsheet_Excel_Reader();
// $data->setOutputEncoding('utf-8');
// $data->read($_FILES['filetraining']['name'], false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index = 0);

// jumlah default data yang berhasil di import
// $berhasil = 0;
for ($i = 2; $i <= $jumlah_baris; $i++) {

    // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $npm     = $data->val($i, 1);
    $nama   = $data->val($i, 2);
    $jenis_kelamin  = $data->val($i, 3);
    $tgl_lahir  = $data->val($i, 4);
    $angkatan  = $data->val($i, 5);
    $fakultas  = $data->val($i, 6);
    $prodi  = $data->val($i, 7);
    $periode  = $data->val($i, 8);
    $ipk  = $data->val($i, 9);
    $sks_lulus  = $data->val($i, 10);
    $penghasilan_orangtua  = $data->val($i, 11);
    $tanggungan  = $data->val($i, 12);
    $status = $data->val($i, 13);
    $tags = 0;

    if ($npm != "" && $nama != "" && $jenis_kelamin != "" && $tgl_lahir != ""  && $angkatan != "" && $fakultas != "" && $prodi != "" && $periode != "" && $ipk != ""  && $sks_lulus != "" && $penghasilan_orangtua != "" && $tanggungan != "" && $status != "") {
        // input data ke database (table data_pegawai)
        mysqli_query($connect, "INSERT into testing values('','$npm', '$nama', '$jenis_kelamin', '$tgl_lahir', '$angkatan', '$fakultas', '$prodi', '$periode', '$ipk',  '$sks_lulus', '$penghasilan_orangtua', '$tanggungan', '$status', '$tags')");
        // $berhasil++;
    }
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filetesting']['name']);

// alihkan halaman ke index.php
header("location:../template.php?page=data_testing");
?>
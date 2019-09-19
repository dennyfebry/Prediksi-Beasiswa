<?php
$query = "SELECT COUNT(id) as total FROM klasifikasi WHERE actual='diterima' && predict='diterima' ";
$result = mysqli_query($connect, $query);
$mentahTP = mysqli_fetch_assoc($result);
$truePositif = ($mentahTP['total']);
// echo $truePositif."</br>";

$query = "SELECT COUNT(id) as total FROM klasifikasi WHERE actual='ditolak' && predict='ditolak' ";
$result = mysqli_query($connect, $query);
$mentahTN = mysqli_fetch_assoc($result);
$trueNegatif = ($mentahTN['total']);
// echo $trueNegatif."</br>";

$query = "SELECT COUNT(id) as total FROM klasifikasi WHERE actual='ditolak' && predict='diterima' ";
$result = mysqli_query($connect, $query);
$mentahFP = mysqli_fetch_assoc($result);
$falsePositif = ($mentahFP['total']);
// echo $falsePositif."</br>";

$query = "SELECT COUNT(id) as total FROM klasifikasi WHERE actual='diterima' && predict='ditolak' ";
$result = mysqli_query($connect, $query);
$mentahFN = mysqli_fetch_assoc($result);
$falseNegatif = ($mentahFN['total']);
// echo $falseNegatif."</br>";
?>
<div class="multi-uploaded-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert-title dropzone-custom-sys">

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <?php
                        ?>
                        <table style="width:100%" class="table table-bordered">
                            <tr>
                                <th>Prediksi/Aktual</th>
                                <th>Diterima</th>
                                <th>Ditolak</th>
                            </tr>
                            <tr>
                                <th>Diterima</th>
                                <td><?php
                                    echo $truePositif;
                                    ?>
                                </td>
                                <td><?php
                                    echo $falsePositif;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Ditolak</th>
                                <td><?php
                                    echo $falseNegatif;
                                    ?>
                                </td>
                                <td><?php
                                    echo $trueNegatif;
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$akurasi = ROUND((($truePositif+$trueNegatif)/($truePositif+$trueNegatif+$falsePositif+$falseNegatif))*100,2);
echo "<h4>Accuracy\t: ".$akurasi."%</h4>";

$presisi = ROUND((($truePositif)/($truePositif+$falsePositif))*100,2);
echo "<h4>Precision\t: ".$presisi."%</h4>";

$recall = ROUND((($truePositif)/($falseNegatif+$truePositif))*100,2);
echo "<h4>Recall\t: ".$recall."%</h4>";

// //IPK
// echo "IPK</br>";
// $query = "SELECT AVG(ipk) as avgditerima FROM training WHERE status='diterima' ";
// $result = mysqli_query($connect, $query);
// $mentahAverageDiterima = mysqli_fetch_assoc($result);
// $averageDiterima = ($mentahAverageDiterima['avgditerima']);
// echo "Average Diterima\t : ".$averageDiterima."</br>";

// $query = "SELECT AVG(ipk) as avgditolak FROM training WHERE status='ditolak' ";
// $result = mysqli_query($connect, $query);
// $mentahAverageDitolak = mysqli_fetch_assoc($result);
// $averageDitolak = ($mentahAverageDitolak['avgditolak']);
// echo "Average Ditolak\t : ".$averageDitolak."</br>";

// $query = "SELECT STDDEV_SAMP(ipk) as stdev from training where status = 'diterima' ";
// $result = mysqli_query($connect, $query);
// $mentahSTDEVSampleDiterima = mysqli_fetch_assoc($result);
// $stdevSampleDiterima = ($mentahSTDEVSampleDiterima['stdev']);
// echo "STDEV Diterima\t : ".$stdevSampleDiterima."</br>";

// $query = "SELECT STDDEV_SAMP(ipk) as stdev from training where status = 'ditolak' ";
// $result = mysqli_query($connect, $query);
// $mentahSTDEVSampleDitolak = mysqli_fetch_assoc($result);
// $stdevSampleDitolak = ($mentahSTDEVSampleDitolak['stdev']);
// echo "STDEV Ditolak\t : ".$stdevSampleDitolak."</br>";

// //SKS LULUS
// echo "SKS LULUS</br>";
// $query = "SELECT AVG(sks_lulus) as avgditerima FROM training WHERE status='diterima' ";
// $result = mysqli_query($connect, $query);
// $mentahAverageDiterima = mysqli_fetch_assoc($result);
// $averageDiterima = ($mentahAverageDiterima['avgditerima']);
// echo "Average Diterima\t : ".$averageDiterima."</br>";

// $query = "SELECT AVG(sks_lulus) as avgditolak FROM training WHERE status='ditolak' ";
// $result = mysqli_query($connect, $query);
// $mentahAverageDitolak = mysqli_fetch_assoc($result);
// $averageDitolak = ($mentahAverageDitolak['avgditolak']);
// echo "Average Ditolak\t : ".$averageDitolak."</br>";

// $query = "SELECT STDDEV_SAMP(sks_lulus) as stdev from training where status = 'diterima' ";
// $result = mysqli_query($connect, $query);
// $mentahSTDEVSampleDiterima = mysqli_fetch_assoc($result);
// $stdevSampleDiterima = ($mentahSTDEVSampleDiterima['stdev']);
// echo "STDEV Diterima\t : ".$stdevSampleDiterima."</br>";

// $query = "SELECT STDDEV_SAMP(sks_lulus) as stdev from training where status = 'ditolak' ";
// $result = mysqli_query($connect, $query);
// $mentahSTDEVSampleDitolak = mysqli_fetch_assoc($result);
// $stdevSampleDitolak = ($mentahSTDEVSampleDitolak['stdev']);
// echo "STDEV Ditolak\t : ".$stdevSampleDitolak."</br>";

// //penghasilan orangtua
// echo "Penghasilan orangtua</br>";
// $query = "SELECT AVG(penghasilan_orangtua) as avgditerima FROM training WHERE status='diterima' ";
// $result = mysqli_query($connect, $query);
// $mentahAverageDiterima = mysqli_fetch_assoc($result);
// $averageDiterima = ($mentahAverageDiterima['avgditerima']);
// echo "Average Diterima\t : ".$averageDiterima."</br>";

// $query = "SELECT AVG(penghasilan_orangtua) as avgditolak FROM training WHERE status='ditolak' ";
// $result = mysqli_query($connect, $query);
// $mentahAverageDitolak = mysqli_fetch_assoc($result);
// $averageDitolak = ($mentahAverageDitolak['avgditolak']);
// echo "Average Ditolak\t : ".$averageDitolak."</br>";

// $query = "SELECT STDDEV_SAMP(penghasilan_orangtua) as stdev from training where status = 'diterima' ";
// $result = mysqli_query($connect, $query);
// $mentahSTDEVSampleDiterima = mysqli_fetch_assoc($result);
// $stdevSampleDiterima = ($mentahSTDEVSampleDiterima['stdev']);
// echo "STDEV Diterima\t : ".$stdevSampleDiterima."</br>";

// $query = "SELECT STDDEV_SAMP(penghasilan_orangtua) as stdev from training where status = 'ditolak' ";
// $result = mysqli_query($connect, $query);
// $mentahSTDEVSampleDitolak = mysqli_fetch_assoc($result);
// $stdevSampleDitolak = ($mentahSTDEVSampleDitolak['stdev']);
// echo "STDEV Ditolak\t : ".$stdevSampleDitolak."</br>";

// //Tanggungan
// echo "Tanggungan</br>";
// $query = "SELECT AVG(tanggungan) as avgditerima FROM training WHERE status='diterima' ";
// $result = mysqli_query($connect, $query);
// $mentahAverageDiterima = mysqli_fetch_assoc($result);
// $averageDiterima = ($mentahAverageDiterima['avgditerima']);
// echo "Average Diterima\t : ".$averageDiterima."</br>";

// $query = "SELECT AVG(tanggungan) as avgditolak FROM training WHERE status='ditolak' ";
// $result = mysqli_query($connect, $query);
// $mentahAverageDitolak = mysqli_fetch_assoc($result);
// $averageDitolak = ($mentahAverageDitolak['avgditolak']);
// echo "Average Ditolak\t : ".$averageDitolak."</br>";

// $query = "SELECT STDDEV_SAMP(tanggungan) as stdev from training where status = 'diterima' ";
// $result = mysqli_query($connect, $query);
// $mentahSTDEVSampleDiterima = mysqli_fetch_assoc($result);
// $stdevSampleDiterima = ($mentahSTDEVSampleDiterima['stdev']);
// echo "STDEV Diterima\t : ".$stdevSampleDiterima."</br>";

// $query = "SELECT STDDEV_SAMP(tanggungan) as stdev from training where status = 'ditolak' ";
// $result = mysqli_query($connect, $query);
// $mentahSTDEVSampleDitolak = mysqli_fetch_assoc($result);
// $stdevSampleDitolak = ($mentahSTDEVSampleDitolak['stdev']);
// echo "STDEV Ditolak\t : ".$stdevSampleDitolak."</br>";

?>
                </div>
            </div>
        </div>
    </div>
</div>

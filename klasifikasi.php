<?php
$sql1 = "SELECT DISTINCT periode FROM training";
$sql2 = "SELECT DISTINCT periode FROM testing";
$result1 = $connect->query($sql1);
$result2 = $connect->query($sql2);
$periode_training = [];
$periode_testing = [];
if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        array_push($periode_training, $row["periode"]);
    }
}
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        array_push($periode_testing, $row["periode"]);
    }
}
?>
<div class="multi-uploaded-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert-title dropzone-custom-sys">
                    <h2>Hasil Klasifikiasi</h2>
                    <!-- <p>Dropzone Drag and Drop file uploads PPA Data Training.</p> -->
                    <form action="libs/proses_klasifikasi.php" method="post">
                        <center>
                            <!-- <label>Data Training :</label>
                            <select name="training" class="btn btn-primary">
                                <option value="">Pilih Tahun</option>
                                <?php
                                foreach ($periode_training as $p) {
                                    echo "<option value='" . $p . "'>" . $p . "</option>";
                                }
                                ?>
                            </select>
                            <label>Data Testing :</label>
                            <select name="testing" class="btn btn-primary">
                                <option value="">Pilih Tahun</option>
                                <?php
                                foreach ($periode_testing as $p) {
                                    echo "<option value='" . $p . "'>" . $p . "</option>";
                                }
                                ?>
                            </select> -->
                            <input class="btn btn-success" name="upload" type="submit" value="Proces">
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Klasifikasi</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <?php
                            $sql = "SELECT * FROM klasifikasi";
                            $result = $connect->query($sql);

                            ?>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">No</th>
                                        <th data-field="ipk" data-editable="true">IPK</th>
                                        <th data-field="sks" data-editable="true">SKS Lulus</th>
                                        <th data-field="penghasilan_orangtua" data-editable="true">Penghasilan orangtua</th>
                                        <th data-field="tanggungan" data-editable="true">Tanggungan</th>
                                        <th data-field="actual" data-editable="true">Aktual</th>
                                        <th data-field="predict" data-editable="true">Prediksi</th>
                                        <!-- <th data-field="action">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td></td>";
                                            echo "<td>" . $no . "</td>";
                                            // echo "<td>" . $row["npm"] . "</td>";
                                            // echo "<td>" . $row["nama"] . "</td>";
                                            // echo "<td>" . $row["jenis_kelamin"] . "</td>";
                                            // echo "<td>" . $row["tgl_lahir"] . "</td>";
                                            // echo "<td>" . $row["angkatan"] . "</td>";
                                            // echo "<td>" . $row["fakultas"] . "</td>";
                                            // echo "<td>" . $row["prodi"] . "</td>";
                                            // echo "<td>" . $row["periode"] . "</td>";
                                            echo "<td>" . $row["ipk"] . "</td>";
                                            echo "<td>" . $row["sks_lulus"] . "</td>";
                                            echo "<td>" . $row["penghasilan_orangtua"] . "</td>";
                                            echo "<td>" . $row["tanggungan"] . "</td>";
                                            echo "<td>" . $row["actual"] . "</td>";
                                            echo "<td>" . $row["predict"] . "</td>";
                                            // echo "<td class='datatable-ct'><i class='fa fa-check'></i></td>";
                                            echo "</tr>";
                                            $no++;
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
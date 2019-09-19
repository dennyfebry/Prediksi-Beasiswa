<div class="multi-uploaded-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert-title dropzone-custom-sys">
                    <h2>Upload PPA Data Training</h2>
                    <!-- <p>Dropzone Drag and Drop file uploads PPA Data Training.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="dropzone-pro mg-tb-30">
                    <div id="dropzone1" class="multi-uploader-cs">
                        <!-- <form action="upload/training.php" class="dropzone dropzone-custom needsclick" id="demo1-upload"> -->
                        <form action="upload/training.php" enctype="multipart/form-data" method="post">
                            <center>
                                <div class="dz-message needsclick download-custom">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    <!-- <h2>Drop files here or click to upload.</h2> -->
                                    <p><span class="note needsclick">PPA Data Training</span>
                                    </p>
                                </div>
                                <input class="btn btn-primary" name="filetraining" type="file" required="required"><br>
                                <input class="btn btn-primary" name="upload" type="submit" value="Import">
                            </center>

                        </form>
                    </div>
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
                            <h1>Projects <span class="table-project-n">Data</span> Training</h1>
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
                            $sql = "SELECT * FROM training WHERE tags=0";
                            $result = $connect->query($sql);
                            ?>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">No</th>
                                        <th data-field="npm" data-editable="true">NPM</th>
                                        <th data-field="nama" data-editable="true">Nama</th>
                                        <th data-field="jk" data-editable="true">Jenis Kelamin</th>
                                        <th data-field="tgl" data-editable="true">Tanggal Lahir</th>
                                        <th data-field="angkatan" data-editable="true">Angkatan</th>
                                        <th data-field="fakultas" data-editable="true">Fakultas</th>
                                        <th data-field="prodi" data-editable="true">Prodi</th>
                                        <th data-field="periode" data-editable="true">Periode</th>
                                        <th data-field="ipk" data-editable="true">IPK</th>
                                        <th data-field="sks" data-editable="true">SKS Lulus</th>
                                        <th data-field="penghasilan_orangtua" data-editable="true">Penghasilan orangtua</th>
                                        <th data-field="tanggungan" data-editable="true">Tanggungan</th>
                                        <th data-field="status" data-editable="true">Status</th>
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
                                            echo "<td>" . $row["npm"] . "</td>";
                                            echo "<td>" . $row["nama"] . "</td>";
                                            echo "<td>" . $row["jenis_kelamin"] . "</td>";
                                            echo "<td>" . $row["tgl_lahir"] . "</td>";
                                            echo "<td>" . $row["angkatan"] . "</td>";
                                            echo "<td>" . $row["fakultas"] . "</td>";
                                            echo "<td>" . $row["prodi"] . "</td>";
                                            echo "<td>" . $row["periode"] . "</td>";
                                            echo "<td>" . $row["ipk"] . "</td>";
                                            echo "<td>" . $row["sks_lulus"] . "</td>";
                                            echo "<td>" . $row["penghasilan_orangtua"] . "</td>";
                                            echo "<td>" . $row["tanggungan"] . "</td>";
                                            echo "<td>" . $row["status"] . "</td>";
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
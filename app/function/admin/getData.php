<?php
    if (isset($_POST['get_option'])) {
        include '../../conn.php';
    
        $nik = $_POST['get_option'];
        $findInfo = $mysqli->query("SELECT * FROM user WHERE nik='$nik'");
        $rowInfo = $findInfo->fetch_assoc();
    
        $views = '<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" class="form-control" value="' . $rowInfo['nik'] . '" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" value="' . $rowInfo['nama'] . '" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea type="text" class="form-control" readonly>' . $rowInfo['alamat'] . '</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dusun</label>
                            <input type="text" class="form-control" value="' . $rowInfo['dusun'] . '" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" value="' . $rowInfo['pekerjaan'] . '" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" value="' . $rowInfo['email'] . '" readonly>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="jb">Jenis Bantuan</label>
                            <select name="jb" id="jb" class="form-control select2">
                                <option value="" hidden>--Pilih Jenis Bantuan--</option>
                                <option value="BPNT">BPNT</option>
                                <option value="BST">BST</option>
                                <option value="PKH">PKH</option>
                                <option value="BLT">BLT</option>
                            </select>
                        </div>
                    </div>
                </div>';
    
        echo $views;
    }

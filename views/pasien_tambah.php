<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">  

						 <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nis" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">No.Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
                
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="I" required>
                            </div>
                        </div>
                        
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputPassword3" placeholder="" required>
                            </div>
                        </div>


                        <!--Status-->

                       <!-- <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Dipinjam">Dipinjam</option>
									<option value="Penghapusan">Penghapusan</option>
								</select>
                            </div>
                        </div> -->

                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pasien</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pasien&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pasien
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Get input data from form
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    // Validate input data
    // ...
    // Insert data into database using prepared statements
    $sql = "INSERT INTO tabel_pasien (nis, nama, kelas, tgl_lahir, alamat) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'sssss', $nis, $nama, $kelas, $tgl_lahir, $alamat);

    $result = mysqli_stmt_execute($stmt);
    // Check if insert was successful and redirect or show error message
    if ($result) {
        echo "<script>window.location.assign('?page=pasien&actions=tampil');</script>";
    } else {
        echo $result;
        var_dump($result);
        
    }
}

?>
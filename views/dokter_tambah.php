<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Dokter</h3>
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
                            <label for="nama" class="col-sm-3 control-label">Nama Dokter</label>
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

                        <!--    <div class="form-group">
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
                                    <span class="fa fa-save"></span> Simpan Data Dokter</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=dokter&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Dokter
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if ($_POST) {
    //Ambil data dari form
    $niss = $_POST['nis'];
    $namas = $_POST['nama'];
    $kelass = $_POST['kelas'];
    $tgl_lahirs = $_POST['tgl_lahir'];
    $alamats = $_POST['alamat'];
    //buat sql
    $sql = "INSERT INTO tabel_dokter (nis, nama, kelas, tgl_lahir, alamat) 
     VALUES ('$niss', '$namas', '$kelass', '$tgl_lahirs', '$alamats')";
    if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}

?>
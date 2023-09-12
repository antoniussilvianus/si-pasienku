<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data User</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama User</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="namaInput" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" class="form-control" id="usernameInput" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="paswd" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="paswd" class="form-control" id="paswdInput" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="emailInput" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="ketInput" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data User</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=user&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data User
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if ($_POST) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = $_POST['paswd'];
    $email = $_POST['email'];
    $keterangan = $_POST['ket'];

    // Buat koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "pasien");

    // Periksa koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Buat SQL query
    $sql = "INSERT INTO user (username, paswd, email, nama, level, ket) 
            VALUES ('$username', '$pass', '$email', '$nama', 'level_value', '$keterangan')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data berhasil dibuat');</script>";
        echo "<script>window.location.assign('?page=user&actions=tampil');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Pasien</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body onload="print()">
    <!--Menampilkan data detail arsip-->
    <?php
    include '../config/koneksi.php';
    $sql = "SELECT * FROM tabel_pasien WHERE id='" . $_GET['id'] . "'";
    //proses query ke database
    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
    //Merubaha data hasil query kedalam bentuk array
    $data = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <div class='row'>
            <div class="col-sm-12">
                <!--dalam tabel--->
                <div class="text-center">
                    <h2>Sistem Informasi</h2><br>INPUT PASIEN
                    <hr>
                    <h3>DATA PASIEN</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>NIK</td>
                                <td><?= $data['nis'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Pasien</td>
                                <td><?= $data['nama'] ?></td>
                            </tr>
                            <tr>
                                <td>No.Hp</td>
                                <td><?= $data['kelas'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><?= $data['tgl_lahir'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?= $data['alamat'] ?></td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-Right">
                                    Jakarta <?= date("d-m-Y") ?>
                                    <br><br><br><br>
                                    <u>Dr.Cokorda Gede Bagus Putra<strong></u><br>
                                    Lettu Ckm NRP : 11190028790692
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>
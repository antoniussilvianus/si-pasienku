<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="../img/gultor.png">
    <title>Cetak Semua Data Pasien</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body onload="print()">
    <!--Menampilkan data detail arsip-->
    <?php
    include '../config/koneksi.php';
    ?>

    <div class="container">
        <div class='row'>
            <div class="col-sm-12">
                <!--dalam tabel--->
                <div class="text-center">
                    <h2>Sistem Informasi Input Pasien</h2>
                    <h4>Cijantung , Jakarta Timur<br></h4>
                    <hr>
                    <h3>Data Semua Pasien</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th width="18%">Nik</th>
                                    <th>Nama_Pasien</th>
                                    <th width="14%">
                                        <center>No.Hp</center>
                                    </th>
                                    <th width="15%">
                                        <center>Tanggal Lahir</center>
                                    </th>
                                    <th width="15%">
                                        <center>Alamat</center>
                                    </th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tabel_pasien";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            $nomor = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++;
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nis'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['kelas'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
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
</body>

</html>
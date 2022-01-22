<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
                        <h4>Batu bara, <br> Kab. Batubara, Sumatera Utara, dengan kode pos 21184.</h4>
                        <hr>
                        <h3>DATA SELURUH Pasien</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%">Nik</th><th>Nama_Pasien</th><th width="14%"><center>No.Hp</center></th><th width="15%"><center>Tanggal Lahir</center></th><th width="15%"><center>Alamat</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tabel_pasien";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nis'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['kelas'] ?></td>
									<td><?= $data['tgl_lahir'] ?></td>
									<td><?= $data['alamat'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                <td colspan="2" class="text-Right">
                                        Batu Bara  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Dr.Hamlun<strong></u><br>
                                        NIP.12345678919
								</td>
								</tr>
							</tfoot> 
                       </table>
                    </div>
            </div>
    </body>
</html>
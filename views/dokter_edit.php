<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tabel_dokter WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Dokter</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                        <div class="form-group">
                            <label for="nissis" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nis" value="<?=$data['nis']?>"class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nmsis" class="col-sm-3 control-label">Nama dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="klssis" class="col-sm-3 control-label">No.Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" value="<?=$data['kelas']?>"class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tgllahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>

							<div class="form-group">
                            <label for="almt" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="" >
                            </div>
                        </div>

                          
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Dokter</button>
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
if($_POST){
    //Ambil data dari form
    $nissis=$_POST['nis'];
    $nmsis=$_POST['nama'];
	$klssis=$_POST['kelas'];
    $tgllahir=$_POST['tgl_lahir'];
	$almt=$_POST['alamat'];
    
    //buat sql
    $sql="UPDATE tabel_dokter SET nis='$nissis',nama='$nmsis',kelas='$klssis',tgl_lahir='$tgllahir',alamat='$almt' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=dokter&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>




<?php 
include 'header.php';

$kode = mysqli_real_escape_string($conn, $_GET['produk']);
$result = mysqli_query($conn, "SELECT * FROM produk WHERE kode_produk = '$kode'");
$row = mysqli_fetch_assoc($result);

?>

<div class="container">
    <br>
    <h2 style="width: 100%; border-bottom: 4px solid #ff8680">
        <b>Detail produk</b>
    </h2>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="image/produk/<?= $row['image']; ?>" width="400">
            </div>
        </div>

        <div class="col-md-8">
            <form action="proses/add.php" method="GET">
                <input type="hidden" name="kd_cs" value="<?= $kode_cs; ?>">
                <input type="hidden" name="produk" value="<?= $kode; ?>">
                <input type="hidden" name="hal" value="2">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>Nama</b></td>
                            <td><?= $row['nama']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Harga</b></td>
                            <td>Rp.<?= number_format($row['harga']); ?></td>
                        </tr>
                        <tr>
                            <td><b>Deskripsi</b></td>
                            <td><?= $row['deskripsi']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Jumlah</b></td>
                            <td><input class="form-control" type="number" min="1" name="jml" value="1" style="width: 155px;"></td>
                        </tr>
                    </tbody>
                </table>
                
                <!-- WhatsApp Button -->
                <a href="https://wa.me/+6281368852388?text=Hai%20saya%20ingin%20pesan%20menu%20<?= $row['nama']; ?>" target="_blank" class="btn btn-success">
                    Order via WhatsApp
                </a>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<?php 
include 'footer.php';
?>

<?php
require_once 'dbkoneksi.php';
require_once './template/top.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jenis = $_POST['jenis_layanan_id'];
    $biaya = $_POST['total_biaya'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO layanan (kode, nama, deskripsi, jenis_layanan_id, total_biaya, rating)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$kode, $nama, $deskripsi, $jenis, $biaya, $rating]);

    header("Location: layanan.php");
    exit;
}
?>

<?php require_once './template/sidebar.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php require_once './template/topbar.php'; ?>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Tambah Layanan Kendaraan</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group mb-3">
                            <label>Kode</label>
                            <input type="text" name="kode" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Layanan</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Jenis Layanan</label>
                            <input type="text" name="jenis_layanan_id" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Biaya</label>
                            <input type="number" name="total_biaya" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Rating (1-5)</label>
                            <input type="number" name="rating" class="form-control" min="1" max="5" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="list-layanan.php" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once './template/footer.php'; ?>
</div>
<?php require_once './template/bottom.php'; ?>

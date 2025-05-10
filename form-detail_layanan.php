<?php
require_once 'dbkoneksi.php';
require_once './template/top.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pekerjaan = $_POST['pekerjaan'];
    $biaya = $_POST['biaya'];
    $layanan_id = $_POST['layanan_id'];
    $pj_montir_id = $_POST['pj_montir_id'];

    $sql = "INSERT INTO detail_layanan (pekerjaan, biaya, layanan_id, pj_montir_id)
            VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$pekerjaan, $biaya, $layanan_id, $pj_montir_id]);

    header("Location: detail_layanan.php");
    exit;
}
?>

<?php require_once './template/sidebar.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php require_once './template/topbar.php'; ?>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Tambah Layanan Detail</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group mb-3">
                            <label>Pekerjaan</label>
                            <textarea type="text" name="pekerjaan" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>biaya</label>
                            <input type="number" name="biaya" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Layanan_ID</label>
                            <input name="layanan_id" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>PJ Montir ID</label>
                            <input type="text" name="pj_montir_id" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="list-detail_layanan.php" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once './template/footer.php'; ?>
</div>
<?php require_once './template/bottom.php'; ?>

<?php
require_once 'dbkoneksi.php';
require_once './template/top.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $sql = "INSERT INTO kategori_montir (id, nama)
            VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id, $nama]);

    header("Location: kategori_montir.php");
    exit;
}
?>

<?php require_once './template/sidebar.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php require_once './template/topbar.php'; ?>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Tambah Kategori Montir</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group mb-3">
                            <label>id</label>
                            <input type="number" name="id" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="list-kategori_montir.php" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once './template/footer.php'; ?>
</div>
<?php require_once './template/bottom.php'; ?>

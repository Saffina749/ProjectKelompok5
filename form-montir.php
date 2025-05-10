<?php
require_once 'dbkoneksi.php';
require_once './template/top.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $keahlian = $_POST['keahlian'];
    $kategori_montir_id = $_POST['kategori_montir_id'];


    $sql = "INSERT INTO montir (nomor, nama, gender, tgl_lahir, tmp_lahir, keahlian, kategori_montir_id)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$nomor, $nama, $gender, $tgl_lahir, $tmp_lahir, $keahlian, $kategori_montir_id]);

    header("Location: montir.php");
    exit;
}
?>

<?php require_once './template/sidebar.php'; ?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php require_once './template/topbar.php'; ?>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Tambah Montir</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group mb-3">
                            <label>Nomor</label>
                            <input type="text" name="nomor" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Gender</label>
                            <input type="text" name="gender" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Keahlian</label>
                            <textarea type="text" name="keahlian" class="form-control" row="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Kategori Montir ID</label>
                            <input type="number" name="kategori_montir_id" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="list-montir.php" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once './template/footer.php'; ?>
</div>
<?php require_once './template/bottom.php'; ?>

<?php 
require_once './dbkoneksi.php';  
$query = $db->query("SELECT * FROM layanan");  
require_once './template/top.php'; 
?>         
<?php require_once './template/sidebar.php'; ?>         
<div id="content-wrapper" class="d-flex flex-column">              
    <div id="content">                  
        <?php require_once './template/topbar.php'; ?>                  
        <div class="container-fluid">                      
            <h1 class="h3 mb-4 text-gray-800">DAFTAR LAYANAN KENDARAAN</h1>                      
            <div class="card">                     
                <div class="card-body">                      
                    <a href="form-layanan.php" class="btn btn-success mb-3">+ Tambah Layanan</a>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama Layanan</th>
                                <th>Deskripsi</th>
                                <th>Jenis</th>
                                <th>Biaya</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $layanan): ?>
                                <tr>
                                    <td><?= $layanan['id'] ?></td>
                                    <td><?= $layanan['kode'] ?></td>
                                    <td><?= $layanan['nama'] ?></td>
                                    <td><?= $layanan['deskripsi'] ?></td>
                                    <td><?= $layanan['jenis_layanan_id'] ?></td>
                                    <td>Rp <?= number_format($layanan['total_biaya'], 0, ',', '.') ?></td>
                                    <td><?= $layanan['rating'] ?> / 5</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>                          
                </div>                      
            </div>                  
        </div>              
    </div>             
    <?php require_once './template/footer.php'; ?>              
</div>         
<?php require_once './template/bottom.php'; ?>

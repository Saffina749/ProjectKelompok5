<?php 
require_once './dbkoneksi.php';  
$query = $db->query("SELECT * FROM detail_layanan");  
require_once './template/top.php'; 
?>         
<?php require_once './template/sidebar.php'; ?>         
<div id="content-wrapper" class="d-flex flex-column">              
    <div id="content">                  
        <?php require_once './template/topbar.php'; ?>                  
        <div class="container-fluid">                      
            <h1 class="h3 mb-4 text-gray-800">DETAIL LAYANAN</h1>                      
            <div class="card">                     
                <div class="card-body">                      
                    <a href="form-detail_layanan.php" class="btn btn-success mb-3">+ Tambah Detail Layanan</a>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Pekerjaan</th>
                                <th>Biaya</th>
                                <th>Layanan ID</th>
                                <th>PJ Montir ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $detail_layanan): ?>
                                <tr>
                                    <td><?= $detail_layanan['pekerjaan'] ?></td>
                                    <td><?= $detail_layanan['biaya'] ?></td>
                                    <td><?= $detail_layanan['layanan_id'] ?></td>
                                    <td><?= $detail_layanan['pj_montir_id'] ?></td>
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

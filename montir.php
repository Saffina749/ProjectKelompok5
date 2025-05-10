<?php 
require_once './dbkoneksi.php';  
$query = $db->query("SELECT * FROM montir");  
require_once './template/top.php'; 
?>         
<?php require_once './template/sidebar.php'; ?>         
<div id="content-wrapper" class="d-flex flex-column">              
    <div id="content">                  
        <?php require_once './template/topbar.php'; ?>                  
        <div class="container-fluid">                      
            <h1 class="h3 mb-4 text-gray-800">DAFTAR MONTIR</h1>                      
            <div class="card">                     
                <div class="card-body">                      
                    <a href="form-montir.php" class="btn btn-success mb-3">+ Tambah Montir</a>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Keahlian</th>
                                <th>Kategori Montir ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $montir): ?>
                                <tr>
                                    <td><?= $montir['nomor'] ?></td>
                                    <td><?= $montir['nama'] ?></td>
                                    <td><?= $montir['gender'] ?></td>
                                    <td><?= $montir['tgl_lahir'] ?></td>
                                    <td><?= $montir['tmp_lahir'] ?></td>
                                    <td><?= $montir['keahlian'] ?></td>
                                    <td><?= $montir['kategori_montir_id'] ?></td>
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

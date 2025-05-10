<?php 
require_once './dbkoneksi.php';  
$query = $db->query("SELECT * FROM kategori_montir");  
require_once './template/top.php'; 
?>         
<?php require_once './template/sidebar.php'; ?>         
<div id="content-wrapper" class="d-flex flex-column">              
    <div id="content">                  
        <?php require_once './template/topbar.php'; ?>                  
        <div class="container-fluid">                      
            <h1 class="h3 mb-4 text-gray-800">KATEGORI MONTIR</h1>                      
            <div class="card">                     
                <div class="card-body">                      
                    <a href="form-kategori-montir.php" class="btn btn-success mb-3">+ Tambah Kategori Montir</a>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $kategori_montir): ?>
                                <tr>
                                    <td><?= $kategori_montir['id'] ?></td>
                                    <td><?= $kategori_montir['nama'] ?></td>
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

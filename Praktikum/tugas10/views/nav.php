<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
           <a class="navbar-brand" href="index.php">Toko Buku Online</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                       <a class="nav-link" href="index.php">Daftar Buku</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="tambah_buku.php">Tambah Buku</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="transaksi.php">Buat Pesanan</a>
                   </li>
 <li class="nav-item">
                       <a class="nav-link" href="lihat_transaksi.php">Lihat 

    Pesanan</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="hapus.php">Hapus Buku</a>
                   </li>
                   <?php if (isset($_SESSION['login_Un51k4']) && $_SESSION['login_Un51k4'] === true):?>
                   <li><a class="nav-link" href="../controllers/proses_logout.php">Logout</a></li>
                   <?php else: ?>
                    <li><a class="nav-link" href="../controllers/proses_login.php">login</a></li>
                    <?php endif; ?>
               </ul>
           </div>
       </div>
   </nav>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
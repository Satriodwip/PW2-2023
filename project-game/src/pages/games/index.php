<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/Games.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$game = new games($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id']) && !empty($_GET['id'])){
    $game->id = $_GET['id'];

    if($game->delete()){
        header("Location: index.php");
        exit(); // Keluar dari skrip setelah redirect
    } else {
        echo "Gagal menghapus produk."; // Tampilkan pesan kesalahan
    }
}

// Tampilkan data dari method index
$data = $game->index();
?>


<h1 class="text-center mt-4">Daftar Jenis Game</h1>
<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-bordered table-hover" style="border: 3px solid;">
            <thead class="table" style="background-color: red; text-align:center;">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Platform</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach($data as $row) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td> <!-- Menghindari XSS -->
                        <td><?php echo htmlspecialchars($row['platform']); ?></td> <!-- Menghindari XSS -->
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary me-2"><i class="fas fa-edit"></i> Edit</a>
                            <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="create.php" class="btn btn-primary mb-3"><i class="fas fa-plus me-2"></i>Tambah</a> <!-- Tautan Tambah -->
    </div>
</div>

<?php
include_once '../../layouts/footer.php';
?>

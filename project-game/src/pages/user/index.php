<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/User.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$usr = new Users($db);

// Delete user jika parameter id ada pada URL
if(isset($_GET['id'])){
    $usr->id = $_GET['id'];

    if($usr->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus user.";
    }
}

// Ambil data user dari method index
$data = $usr->index();
?>


<body>
<div class="container-fluid px-4 mt-5">
    <h1 class="mt-5 me-5 text-center">User Table</h1>
</div>
<hr>
<div class="container-fluid">
    <<table class="table table-bordered table-hover" style="border: 3px solid;">
            <thead class="table" style="background-color: red; text-align:center;">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Balance</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach($data as $row) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['balance']; ?></td>
                <td class="text-center">
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                    <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="create.php" class="btn btn-primary mb-3"><i class="fas fa-plus me-2"></i>Tambah User</a>
</div>
</body>

<?php include_once '../../layouts/footer.php'; ?>

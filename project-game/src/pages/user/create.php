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

if(isset($_POST['tambah'])){
    $usr->username = $_POST['username'];
    $usr->email = $_POST['email'];
    $usr->password = $_POST['password'];
    $usr->balance = $_POST['balance'];
    
    $usr->store(); 
    header("Location:index.php");
    exit;
}
?>

<body>
    <h1>Tambah Data</h1>
    <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="" >
        <div class="form-group">
            <input type="hidden" name="id">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label for="balance">Balance:</label>
            <input type="text" class="form-control" name="balance" required>
        </div>
        <br>
        <input class="btn btn-primary" type="submit" name="tambah" value="Tambah">
    </form>
</body>

<?php
include_once '../../layouts/footer.php';
?>

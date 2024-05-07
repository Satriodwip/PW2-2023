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

if(isset($_POST['update'])) {
    $usr->id = $_POST['id'];
    $usr->username = $_POST['username'];
    $usr->email = $_POST['email'];
    $usr->password = $_POST['password'];
    $usr->balance = $_POST['balance'];

    $usr->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $usr->id = $_GET['id'];
    $stmt = $usr->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>

<body>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Top up</h1>
    <hr>   
    </div>
    <form class="form-horizontal w-75 mt-3 mx-auto p-4 border shadow-sm" method="POST" action="">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="username">Username:</label>
            <input class="form-control" type="text" name="username" value="<?php echo $username; ?>" required>
        </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input class="form-control" type="email" name="email" value="<?php echo $email; ?>" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" type="text" name="password" value="<?php echo $password; ?>" required>
    </div>
    <div class="form-group">
        <label for="balance">Balance:</label>
        <input class="form-control" type="text" name="balance" value="<?php echo $balance; ?>" required>
    </div>
    <br>
        <input class="btn btn-primary" type="submit" name="update" value="Update">
    </form>
</body>
</html>

<?php
include_once '../../layouts/footer.php';
?>
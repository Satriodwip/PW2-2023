<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/Topups.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$top = new Topups($db);

if(isset($_POST['update'])) {
    $top->id = $_POST['id'];
    $top->user_id = $_POST['user_id'];
    $top->game_id = $_POST['game_id'];
    $top->amount = $_POST['amount'];
    $top->topup_date = $_POST['topup_date'];

    $top->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $top->id = $_GET['id'];
    $stmt = $top->edit();
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="border shadow-sm p-4 rounded" method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3 row">
                        <label for="user_id" class="col-sm-4 col-form-label">User ID:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="user_id" value="<?php echo $user_id; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="game_id" class="col-sm-4 col-form-label">Game ID:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="game_id" value="<?php echo $game_id; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="amount" class="col-sm-4 col-form-label">Amount:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input class="form-control" type="number" name="amount" value="<?php echo $amount; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="topup_date" class="col-sm-4 col-form-label">Date:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="topup_date" value="<?php echo $topup_date; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include_once '../../layouts/footer.php';
?>

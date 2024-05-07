<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/Transaction.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$trs = new Transactions($db);

if(isset($_POST['update'])) {
    $trs->id = $_POST['id'];
    $trs->user_id = $_POST['user_id'];
    $trs->game_id = $_POST['game_id'];
    $trs->amount = $_POST['amount'];
    $trs->transaction_date = $_POST['transaction_date'];

    $trs->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $trs->id = $_GET['id'];
    $stmt = $trs->edit();
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
            <label for="user_id">User ID:</label>
            <input class="form-control" type="text" name="user_id" value="<?php echo $user_id; ?>" required>
        </div>
    <div class="form-group">
        <label for="game_id">Game ID:</label>
        <input class="form-control" type="text" name="game_id" value="<?php echo $game_id; ?>" required>
    </div>
    <div class="form-group">
        <label for="amount">Amount:</label>
        <input class="form-control" type="number" name="amount" value="<?php echo $amount; ?>" required>
    </div>
    <div class="form-group">
        <label for="transaction_date">Date:</label>
        <input class="form-control" type="text" name="transaction_date" value="<?php echo $transaction_date; ?>" required>
    </div>
    <br>
        <input class="btn btn-primary" type="submit" name="update" value="Update">
    </form>
</body>
</html>

<?php
include_once '../../layouts/footer.php';
?>
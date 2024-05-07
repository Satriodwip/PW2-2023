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

if(isset($_POST['tambah'])){
    $trs->user_id = $_POST['user_id'];
    $trs->game_id = $_POST['game_id'];
    $trs->amount = $_POST['amount'];
    $trs->transaction_date = $_POST['transaction_date'];
    
    $trs->store(); 
    header("Location:index.php");
    exit;
}
?>

<body>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="border shadow-sm p-4 rounded" method="POST" action="" >
                    <div class="mb-3 row">
                        <label for="user_id" class="col-sm-4 col-form-label">User ID:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="user_id" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="game_id" class="col-sm-4 col-form-label">Game ID:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="game_id" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="amount" class="col-sm-4 col-form-label">Amount:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input class="form-control" type="number" name="amount"required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="topup_date" class="col-sm-4 col-form-label">Transaction Date:</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="topup_date" required>
                        </div>
                    </div>
                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="tambah"><i class="fas fa-plus me-2"></i>Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include_once '../../layouts/footer.php';
?>

<?php
include_once 'src/layouts/link.php';
include_once 'src/layouts/header.php';
include_once 'src/layouts/sidebar.php';
?>  

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</div>   

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body text-center fs-6">Jumlah Game | <i class='bx bx-joystick bx-tada' style="font-size: 25px;" ></i></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body text-center fs-6">Total Top Up | <i class='bx bx-cart bx-flashing' style="font-size: 25px;" ></i></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body text-center fs-6">Jumlah Transaction | <i class='bx bx-bar-chart-alt-2 bx-flashing' style="font-size:25px;" ></i></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body text-center fs-6">Jumlah Pembeli | <i class='bx bx-user bx-burst' style='font-size: 23px;' ></i> </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pembeli terahir
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelangan</th>
                        <th>Jumlah Transaction</th>
                        <th>Total Transaction</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Asep Kopling</td>
                        <td>10</td>
                        <td>500.000</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm me-2">Delete</button>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Roger Sumatra</td>
                        <td>5</td>
                        <td>100.000</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm me-2">Delete</button>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Rehan Kebab</td>
                        <td>15</td>
                        <td>650.000</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm me-2">Delete</button>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Sigit Rendang</td>
                        <td>20</td>
                        <td>800.000</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm me-2">Delete</button>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Rizky Icikiwir</td>
                        <td>3</td>
                        <td>100.000</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm me-2">Delete</button>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'src/layouts/footer.php';
?>

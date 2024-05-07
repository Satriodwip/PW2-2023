<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-danger">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/pw2-2024/project-game/index.php">S_Store</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 burger-icon" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Menu -->
        <ul class="nav justify-content-end flex-grow-1">
            <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="/pw2-2024/project-game/src/pages/games/index.php">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" aria-disabled="true" href="/pw2-2024/project-game/src/pages/topup/index.php">Top Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" aria-disabled="true" href="/pw2-2024/project-game/src/pages/transaksi/index.php">Transaction</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light"  aria-disabled="true" href="/pw2-2024/project-game/src/pages/user/index.php">User</a>
            </li>
        </ul>
        <!-- Navbar Search Form -->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- Sidebar Menu Heading -->
                        <div class="sb-sidenav-menu-heading">Main</div>
                        <!-- Dashboard Link -->
                        <a class="nav-link" href="/pw2-2024/project-game/index.php">
                            <div class="sb-nav-link-icon"><i class='bx bxs-home bx-fade-down' style='color:#29ebf9; font-size:22px;'></i></div>
                            Dashboard
                        </a>
                        <!-- Sidebar Menu Heading -->
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <!-- Games Link -->
                        <a class="nav-link" href="/pw2-2024/project-game/src/pages/games/index.php">
                            <div class="sb-nav-link-icon"><i class='bx bx-joystick bx-tada' style="color: red; font-size: 22px;"></i></div>
                            Games
                        </a>
                        <!-- Top Up Link -->
                        <a class="nav-link" href="/pw2-2024/project-game/src/pages/topup/index.php">
                            <div class="sb-nav-link-icon"><i class='bx bxs-cart-add bx-fade-left' style='color:#e5f929; font-size: 22px;'></i></div>
                            Top Up
                        </a>
                        <!-- Transaction Link -->
                        <a class="nav-link" href="/pw2-2024/project-game/src/pages/transaksi/index.php">
                            <div class="sb-nav-link-icon"><i class='bx bx-bar-chart-alt-2 bx-flashing' style='color:#63f705; font-size: 22px'></i></div>
                            Transaction
                        </a>
                        <!-- Users Link -->
                        <a class="nav-link color-primary" href="/pw2-2024/project-game/src/pages/user/index.php">
                            <div class="sb-nav-link-icon"><i class='bx bx-user bx-burst' style='color:#0529f7; font-size: 22px;' ></i></div>
                            Users
                        </a>
                    </div>
                </div>            
                <!-- Sidebar Footer -->
                <div class="sb-sidenav-footer">
                    <div class="small">Copyright &copy;
                        <span class="fw-bold">Satgameshop</span> 2024
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">


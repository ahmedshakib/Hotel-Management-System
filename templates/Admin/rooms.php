

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?> :
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?= PROJECT_ROOT ?>css/styles.css"  rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">HOTEL HOOLULU</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div> -->
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Profile</a></li>
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="<?= PROJECT_ROOT ?>admin/login">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>


    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Core</div>

                            <a class="nav-link" href="<?= PROJECT_ROOT ?>admin/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Interface</div>

                            <a class="nav-link collapsed" href="<?= PROJECT_ROOT ?>admin/rooms">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Rooms
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Add New Room</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Edit Room</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Delete Room</a>
                                </nav>
                            </div> -->

                            <a class="nav-link collapsed" href="<?= PROJECT_ROOT ?>admin/booking">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Booking
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>

                            <!-- <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Active
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Single</a>
                                            <a class="nav-link" href="register.html">Double</a>
                                            <a class="nav-link" href="register.html">Family</a>
                                        </nav>

                                    </div>

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Pending
                                        <div class="sb-sidenav-collapse-arrow"></i></div>
                                    </a>

                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Single</a>
                                            <a class="nav-link" href="register.html">Double</a>
                                            <a class="nav-link" href="404.html">Family</a>
                                        </nav>
                                    </div>

                                </nav>
                            </div> -->

                            <div class="sb-sidenav-menu-heading">Addons</div>
                                <a class="nav-link" href="tables.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Data Table
                                </a>
                                <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-sitemap"></i></div>
                                    Revenue
                                </a>

                                <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-line-chart"></i></div>
                                    Charts
                                </a>
                            </div>
                        </div>

                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as</div>
                            Admin Administrator
                        </div>

                    <!-- </div>
                </div> -->
            </nav>

        </div>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Rooms</h1>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Data Table
                            <!-- <a class="btn btn-outline-success btn-sm float-end" href="<?= PROJECT_ROOT ?>admin/addRoom">
                                Add New Room
                            </a> -->

                            <!-- Modal Start -->
                            <button type="button" class="btn btn-outline-success btn-sm float-end" data-toggle="modal" data-target="#exampleModalCenter">
                                Add New Room
                            </button>

                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLongTitle">Add Room</h3>
                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                                            <!-- <span aria-hidden="true">&times;</span> -->
                                            </button>
                                        </div>
                                    <div class="modal-body">
                                    
                                    <!-- form itself start-->
                                    <form id="test-form" class="white-popup-block mfp-hide" method="POST" action="<?= PROJECT_ROOT ?>admin/addRoom/">
                                        <div class="popup_box">
                                            <div class="popup_inner"> 
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <select style="margin: 0 0 17px 0" class="form-select wide" id="default-select" name="roomTypeId">
                                                            <option data-display="Room type">Room type</option>
                                                            <option value="1">Single Room</option>
                                                            <option value="2">Couple Room</option>
                                                            <option value="3">Family Room</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <input style="margin: 0 0 17px 0" type="text" id="default-select" class="form-control" placeholder="Roon No." name="roomNo">
                                                    </div>
                                                    <button name="submitBtn" type="submit" class="form-control boxed-btn3 btn btn-primary">Save changes</button>        
                                                    <!-- <div class="col-xl-6">
                                                        <input style="margin: 0 0 17px 0" id="datepicker" id="default-select" class="form-control" placeholder="Created date" name="date">
                                                    </div> -->

                                                    <!-- <div class="col-xl-12">
                                                        <button  type="submit" class="form-control boxed-btn3">Save</button> 
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- form itself end -->
                                    </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                            
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Room Type ID</th>
                                            <th>Room No.</th>
                                            <th>Created Date</th>
                                            <th>Modified Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                            $data = is_array($data) ? $data : array($data);
                                            foreach($data as $val){
                                        ?>
                                        
                                            <tr>
                                                <td><?=$val['id'] ?></td>
                                                <td>
                                                    <?php
                                                        
                                                        $val['roomTypeId'];

                                                        if($val['roomTypeId']=="1") 
                                                        echo "Single";
                                                        elseif ($val['roomTypeId']=="2") {
                                                            echo "Couple";
                                                        }elseif ($val['roomTypeId']=="3") {
                                                            echo "Family";
                                                        }
                                    
                                                    ?>
                                                </td>
                                                <td><?=$val['roomNo'] ?></td>
                                                <td><?=$val['created_date'] ?></td>
                                                <td><?=$val['modified_date'] ?></td>

                                                <td>
                                                    <div class="btn-group"> 
                                                        <!-- <button class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button> -->
                                                        <button class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                            <?= $this->Html->link('Edit', ['action' => 'editRoom', $val['id']]) ?>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                                            <?= $this->Html->link('Delete', ['action' => 'deleteRoom', $val['id']]) ?>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= PROJECT_ROOT ?>js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= PROJECT_ROOT ?>assets/demo/chart-area-demo.js"></script>
    <script src="<?= PROJECT_ROOT ?>assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?= PROJECT_ROOT ?>js/datatables-simple-demo.js"></script>

</body>
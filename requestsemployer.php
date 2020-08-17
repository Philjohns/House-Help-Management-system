<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User -Admin Page</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
 <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin.html">Admin Page</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"></a><a class="dropdown-item" href="#"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Welcome</div>
                            <a class="nav-link" href="admindashboard.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="house help data.php">House Helps</a>
                                <a class="nav-link" href="employer data.php">Employers</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down">Users</i></div></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Users
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div      ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="house help report.html">House Helps</a><a class="nav-link" href="employer tata.php"></a><a class="nav-link" href="house help report.html">Employers</a></nav>
                                    </div>
                                    <!--
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>-->
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                                                           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                User Requests
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="requests.php">House Helps</a>
                                <a class="nav-link" href="requestsemployer.php">Employers</a></nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Job Requests</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Job Requests</li>
                            <li class="breadcrumb-item active">Employers</li>
                        </ol>
                        <div class="row">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Job Requests For Employers</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php
                                   require('db.php');
                                   if (isset($_POST['approve'])){
                                    $id = $_POST['id'];
                                    $sql = "UPDATE employer SET id = 1 WHERE id_no = '$id'";
                                    $res = mysqli_query($con,$sql);
                                   }
                                   if (isset($_POST['reject'])){
                                    $id = $_POST['id'];
                                    $sql = "UPDATE employer SET id = 2 WHERE id_no = '$id'";
                                    $res = mysqli_query($con,$sql);
                                   }
                                   $result = mysqli_query($con,"SELECT * FROM employer WHERE id='0'") or die(mysql_error());
                                   ?>
                                   
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Fast Name</th>
                                                <th>Last Name</th>
                                                <th>ID Number</th>
                                                <th>Age</th>
                                                <th>Email</th>
                                                <th>City</th>
                                                <th>Gender</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Fast Name</th>
                                                <th>Last Name</th>
                                                <th>ID Number</th>
                                                <th>Age</th>
                                                <th>Email</th>
                                                <th>City</th>
                                                <th>Gender</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <?php
                                        while ($register = mysqli_fetch_object($result)) {
                                        ?>
                                        <form action="requestsemployer.php" method="post"> 
                                        <tbody>
                                        <tr>
                                            <td><?php echo $register->fname; ?></td>
                                            <td><?php echo $register->lname; ?></td>
                                            <?php echo"<td> <input type='text' name='id' value='". $register->id_no."' style='border: 0px; width: 100px;'/></td>"?>
                                            <td><?php echo $register->age; ?></td>
                                            <td><?php echo $register->email; ?></td>
                                            <td><?php echo $register->city; ?></td>
                                            <td><?php echo $register->gender; ?></td>
                                            <td><input type="button" name="view" value="View" style="color: blue;"></td>
                                       <td><input type="submit" name='approve' value="Approve" style="color: green;"><input type="submit" name='reject' value="Reject" style="color: red;"></td>
                                         </tr>
                                       </tbody>
                                       </form>
                                   <?php } ?>
                                       </table>
                                   
                                     </div>
                            </div>
                        </div>
                     </div>
                   </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; House Help Management Systeem 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
    </html>
<?php
?>
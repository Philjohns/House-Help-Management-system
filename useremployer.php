            <?php 
            session_start();
            include "db.php";
            ?>
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
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
 <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin.html">User Page</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
                            <a class="nav-link" href="userhousehelp.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                user
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="hh employer.php">House Helps</a>
                                <a class="nav-link" href="employeradminpage.php"></a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Contacts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Employer Contacts
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Current Contract</a><a class="nav-link" href="employeradminpage.php"></a><a class="nav-link" href="employeradminpage.php">Previous Contracts </a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        > 
                                        <div class="sb-sidenav-collapse-arrow"></div
                                    ></a>
                                    <!--
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>-->
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        User
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Employer</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="userhousehelp.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Employer</li>
                        </ol>
                        <div class="row">
                             <div style="position: center;" class="table-responsive">

                                   <div style="background-color: green;" class="welcome"><marquee>
                                                <?php 
                                                $email = $_SESSION['email'];
                                                if(isset($_POST['save'])){

                                                }
                                                $sql = "SELECT * FROM employer WHERE email = '$email'";
                                                $res = mysqli_query($con,$sql);
                                                $fetch = mysqli_fetch_array($res);
                                                $idno = $fetch['id_no'];
                                                $fname = $fetch['fname'];
                                                $lname = $fetch['lname'];
                                                $phone = $fetch['phone'];
                                                $age = $fetch['age'];
                                                $username = $fetch['username'];
                                                $gender = $fetch['gender'];
                                                $city = $fetch['city'];
                                                $pic = $fetch['prof'];
                                                $path = $idno.'/'.$pic;

                                                echo "Welcome Back->" . $fname;
                                                    if(isset($_POST['save'])){
                                                    $fname = $_POST['fname'];
                                                    $lname = $_POST['lname'];
                                                    $phone = $_POST['phone'];
                                                    $age = $_POST['age'];
                                                    $phone = $_POST['phone'];
                                                    $username = $_POST['username'];
                                                    $gender = $_POST['gender'];
                                                    $city = $_POST['city'];

                                                   $update_query = "UPDATE employer SET username='$username', fname='$fname', lname='$lname', phone='$phone', city='$city',gender='$gender',age='$age' WHERE email='$email'";
                                                    if (Mysqli_query($con, $update_query) === TRUE) {
                                                        # code...
                                                        echo("<script>alert('Record updated successfully')</script>");
                                                    }else{
                                                        echo("<script>alert('Error updating record')</script>");
                                                    }
                                                    
                                                }
                                                ?>
                                            </marquee>
                                            </div>

                                            <div class="row"> 
                                            <div class="col-md-6">
                                            <h3>Profile Picture</h3>
                                            <?php echo '<img style="width:100px; height:100px; border-radius: 50%;" src="img/profile/'.$path.'"/>'?>
                                            </div>
                                            <div class="col-md-6">

                                               <h3>Online House Help Managegement system</h3>
                                               <ul>
                                                <i class="fa fa-facebook" ></i></a>
                                                <i class="fa fa-twitter" ></i></a>
                                                <i class="fa fa-linkedin" ></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>   
                                               </ul>
                                               </div>
                                            </div>
                                            <h3>Personal Details</h3>
                                            <form action="useremployer.php" method="post">
                                               <?php
                                                echo "
                                                <hr style='border-bottom: 1px solid brown ;'>
                                                <label><b>First Name: </b?</label>
                                                <input style= 'border: 0px;' type='text' name='fname' value='".$fname."'> 
                                                <label>Last Name: </label>
                                                <input style= 'border: 0px;' type='text' name='fname' value='".$lname."'>
                                                <label>ID Number: </label>
                                                <input style= 'border: 0px;' type='text' name='fname' value='".$idno."'>
                                                <label>Username: </label>
                                                <input style= 'border: 0px;' type='text' name='fname' value='".$username."'>
                                                <hr style='border-bottom: 1px solid brown ;'>
                                                <label>City: </label>
                                                <input style= 'border: 0px;' type='text' name='fname' value='".$city."'> 
                                                <label>Gender: </label>
                                                <input style= 'border: 0px;' type='text' name='fname' value='".$gender."'>
                                                <label>Phone Number: </label>
                                                <input style= 'border: 0px;' type='text' name='fname' value='".$phone."'>
                                                <label>Age: </label>
                                                <input style= 'border: 0px;' type='text' name='fname' value='".$age."'>
                                                <hr style='border-bottom: 1px solid brown ;'>
                                                <input style='background-color: red;' type='submit' name='save'  value='Edit'>
                                               <hr style='border-bottom: 1px solid brown ;'>
                                                 ";
                                               ?>  
                                              </div>
                                           </div>
                                         </div>
                                      </main>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Online House Help Management Systeem 2020</div>
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
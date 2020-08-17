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
        <link rel="stylesheet" type="text/css" href="css/househelpjob.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
 <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin.html">User Employer</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
                                 user
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="hh employer.php">House Helps</a>
                                <a class="nav-link" href="employeradminpage.php"></a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Contracts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Employer Contracts
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
                        Employer
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 style="text-align: left;" class="mt-4">House Helps</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">House Helps</li>
                            <li class="breadcrumb-item active">House Helps</li>
                        </ol>
                        <!--<div class="row">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable For House Helps</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php
                                   require('db.php');
                                   if (isset($_POST['approve'])){
                                    $id = $_POST['id'];
                                    $sql = "UPDATE register SET id = 1 WHERE id_no = '$id'";
                                    $res = mysqli_query($con,$sql);
                                   }
                                   if (isset($_POST['reject'])){
                                    $id = $_POST['id'];
                                    $sql = "UPDATE register SET id = 2 WHERE id_no = '$id'";
                                    $res = mysqli_query($con,$sql);
                                   }
                                   $result = mysqli_query($con,"SELECT * FROM register ");
                                   ?>
                                   
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Fast Name</th>
                                                <th>Last Name</th>
                                                <th>ID Number</th>
                                                <th>Age</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>City</th>
                                                <th>Gender</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                 <th>Fast Name</th>
                                                <th>Last Name</th>
                                                <th>ID Number</th>
                                                <th>Age</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>City</th>
                                                <th>Gender</th>
                                                <th>Details</th>
                                            </tr>
                                        </tfoot>
                                        <?php
                                        while ($register = mysqli_fetch_object($result)) {
                                        ?>
                                        <form action="hh employer.php" method="post"> 
                                        <tbody>
                                        <tr>
                                            <td><?php echo $register->fname; ?></td>
                                            <td><?php echo $register->lname; ?></td>
                                            <?php echo"<td> <input type='text' name='id' value='". $register->id_no."' style='border: 0px; width: 100px;'/></td>"?>
                                            <td><?php echo $register->age; ?></td>
                                            <td><?php echo $register->email; ?></td>
                                            <td><?php echo $register->phone; ?></td>
                                            <td><?php echo $register->city; ?></td>
                                            <td><?php echo $register->gender; ?></td>
                                            <td><input type="submit" name="view" value="View" style="color: blue;"></td>
                                         
                                         </tr>
                                       </tbody>
                                       </form>
                                   <?php } ?>
                                       </table>

                                   
                                     </div>
                            </div>
                        </div>
                     </div>
                   </div> -->
               
                <section class="probootstrap-section">
          <!-- <div class="container">
                <div class="row">
                    <h3>House Helps Contract Details</h3>
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                          <li role="presentation" class="active">
                            <a href="jobs.html">With Contract</a>
                          </li>
                          <li role="presentation" class="">
                            <a href="without contract.html">Without Contract</a>
                          </li>
                        </ul>
                    </div>-->
                    <!-- end .col -->
               <!-- </div>-->
                <!-- end .row -->
            <!--</div>-->

      <main>
     <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">WITH CONTRACT</label><span style="padding-left: 7px; padding-right: 7px; color: red;">|</span>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="without contract.html"> WITHOUT CONTRACT</a></label>
      <hr style="border: 3px;s">      
                <div class="container">
        <div class="row">
        <div class="col-md-4 text-center">
            <div class="profile">
                <img src="img/team/obama.jpg" class="user">
                <div class="withjob">
                <ul>
                <li><b>Name:</b> Phillip Ogutu</li> 
                <li><b>Age:</b> 24 </li>    
                <li><b>Phone Number:</b> 0701077552</li>    
                <li><b>Country:</b> Kenya</li>  
                <li><b>Current Contract:</b><font color="green"> NONE</font></li>        
                <li><b>End OF Contract:</b><font color="red"> NONE </font>  </li>
                </ul>
                </div>
                </p>
                <p>Am a hard working man, self disciplned and love cooking and cleaning <button style="background-color: green;">Call Me Now.</button></p>
                </div>
            
        </div>
            <div class="col-md-4 text-center">
            <div class="profile">
                <img src="img/team/joel.jpg" class="user">
                <img src="img/team/obama.jpg" class="user">
                <div class="withjob">
                <ul>
                <li><b>Name:</b> Phillip Ogutu</li> 
                <li><b>Age:</b> 24 </li>    
                <li><b>Phone Number:</b> 0701077552</li>    
                <li><b>Country:</b> Kenya</li>  
                <li><b>Current Contract:</b><font color="green"> NONE</font></li>        
                <li><b>End OF Contract:</b><font color="red"> NONE </font>  </li>
                </ul>
                </div>
                </p>
                <p>Am a hard working man, self disciplned and love cooking and cleaning <button style="background-color: green;">Call Me Now.</button></p>
                </div>
            
        </div>
            <div class="col-md-4 text-center">
            <div class="profile">
                <img src="img/team/maxwel.jpg" class="user">
                <div class="withjob">
                <ul>
                <li><b>Name:</b> Phillip Ogutu</li> 
                <li><b>Age:</b> 24 </li>    
                <li><b>Phone Number:</b> 0701077552</li>    
                <li><b>Country:</b> Kenya</li>  
                <li><b>Current Contract:</b><font color="green"> NONE</font></li>        
                <li><b>End OF Contract:</b><font color="red"> NONE </font>  </li>
                </ul>
                </div>
                </p>
                <p>Am a hard working man, self disciplned and love cooking and cleaning <button style="background-color: green;">Call Me Now.</button></p>
                </div>
            
        </div>

        <div class="container" style="margin-top: 10px;">
        <div class="row">
        <div class="col-md-4 text-center">
            <div class="profile">
                <img src="img/team/obama.jpg" class="user">
                <img src="img/team/obama.jpg" class="user">
                <div class="withjob">
                <ul>
                <li><b>Name:</b> Phillip Ogutu</li> 
                <li><b>Age:</b> 24 </li>    
                <li><b>Phone Number:</b> 0701077552</li>    
                <li><b>Country:</b> Kenya</li>  
                <li><b>Current Contract:</b><font color="green"> NONE</font></li>        
                <li><b>End OF Contract:</b><font color="red"> NONE </font>  </li>
                </ul>
                </div>
                </p>
                <p>Am a hard working man, self disciplned and love cooking and cleaning <button style="background-color: green;">Call Me Now.</button></p>
                </div>
            
        </div>
            <div class="col-md-4 text-center">
            <div class="profile">
                <img src="img/team/joel.jpg" class="user">
                <img src="img/team/obama.jpg" class="user">
                <div class="withjob">
                <ul>
                <li><b>Name:</b> Phillip Ogutu</li> 
                <li><b>Age:</b> 24 </li>    
                <li><b>Phone Number:</b> 0701077552</li>    
                <li><b>Country:</b> Kenya</li>  
                <li><b>Current Contract:</b><font color="green"> NONE</font></li>        
                <li><b>End OF Contract:</b><font color="red"> NONE </font>  </li>
                </ul>
                </div>
                </p>
                <p>Am a hard working man, self disciplned and love cooking and cleaning <button style="background-color: green;">Call Me Now.</button></p>
                </div>
            
        </div>
            <div class="col-md-4 text-center">
            <div class="profile">
                <img src="img/team/obama.jpg" class="user">
                <div class="withjob">
                <ul>
                <li><b>Name:</b> Phillip Ogutu</li> 
                <li><b>Age:</b> 24 </li>    
                <li><b>Phone Number:</b> 0701077552</li>    
                <li><b>Country:</b> Kenya</li>  
                <li><b>Current Contract:</b><font color="green"> NONE</font></li>        
                <li><b>End OF Contract:</b><font color="red"> NONE </font>  </li>
                </ul>
                </div>
                </p>
                <p>Am a hard working man, self disciplned and love cooking and cleaning <button style="background-color: green;">Call Me Now.</button></p>
                </div>
            
        </div>
      </div>
</div>
</main>
    </section>
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
<?php
include 'dbopen.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to iNDIGO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <h1 ><a href="hometeacher.php" style="color:#843df9">iNDIGO</a></h1>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>View</span></a>
                                <ul class="collapse">
                                    <li><a href="todayattendance.php"> Today's Attendance</a></li>
                                    <li><a href="overallattendance.php"> Overall Attendance</a></li>
                                    <li><a href="lowattendance.php">Low Attendance</a></li>
                                    <li><a href="attendanceperday.php">Attendance According to the Date</a></li>
                                    <li><a href="attendanceanalytics.php">Attendance Analytics</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>Record
                                        
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="recordattendance.php">Record Attendance</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>Search Details</span></a>
                                <ul class="collapse">
                                    <li><a href="searchdetails.php">Search Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content"  style="background-color:#303640;">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    
                     <!-- zoom out -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--page title area starts-->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="hometeacher.php">Home</a></li>
                                <li><a>Attendance</a></li>
                                <li>Low Attendance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php 
                                   $que = "SELECT Admin_Name, Last_name,Class FROM Admins WHERE Username ='" . $adminusername . "' and Pass = '". $adminpassword . "'";
                                   $result = $conn->query($que);
                                   $row = $result->fetch_assoc();
                                   $name = $row['Admin_Name']." ".$row['Last_name'];
                                   $class = $row['Class'];
                                   echo $name; 
                                 ?>
                            <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php" name="logout" id="logout">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- page title area end -->

            <!-- main content inner -->
            <div class="main-content-inner">
                    <h3 style="color:white;font-family: 'Times New Roman', Times, serif;" class="mt-3"> Statistics of Low Attendance Students </h3>
                    <div class="col-12 mt-3" style="font-family: 'Times New Roman', Times, serif;color: #843df9">
                        <div class="card">
                            <div class="card-body" >
                              You can search for the students with low attendance in each class by entering the class in the search 
                              box below. Details such as their phone numbers and email addresses will also appear for the facilitating the process
                              of contacting the mentioned students. The threshold for low attendance is 5 days per month. You can filter the table accordingly using 
                              the search box attached to the table . The number of entries per page is 10.
                            </div>
                        </div>
                    </div>
                    <form action="lowattendance.php" method="post">
                        <div class="row" >
                             <div class="col-lg-4 col-md-4 mt-5">
                                  <select name="searchclass" id="searchclass" class="custom-select" required>
                                         <option selected >Enter the Class</option>
                                         <option value="6">6</option>
                                         <option value="7">7</option>
                                         <option value="8">8</option>
                                  </select>
                             </div>
                             <div class="col-lg-4 col-md-4 mt-5">
                                    <select name="month" id="month" class="custom-select" required>
                                         <option selected>Enter the Month...</option>
                                         <option value="January">January</option>
                                         <option value="February">February</option>
                                         <option value="March">March</option>
                                         <option value="April">April</option>
                                         <option value="May">May</option>
                                         <option value="June">June</option>
                                         <option value="July">July</option>
                                         <option value="August">August</option>
                                         <option value="September">September</option>
                                         <option value="October">October</option>
                                         <option value="November">November</option>
                                         <option value="December">December</option>
                                    </select>
                             </div>
                             <div class="col-lg-4 col-md-4 mt-5">
                                      <input type="submit" name="search" id="search" value="Search" class="btn btn-info btn-rounded mb-3 " >
                             </div>
                             </div>
                        </div>
                    </form>
                                    
                    <!-- datatable starts -->
                    <div class="col-12 mt-3" style="padding-bottom:2%;">
                        <div class="card">
                            <div class="card-body" style="background-color: #b182ff">
                                <h4 class="header-title" id="heading">Students with low attendance for the Month 
                                </h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center" >
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Class</th>
                                                <th>Attendance for the Selected Month</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                               if(isset($_POST['search'])){
                                                if($_POST['searchclass']) {
                                                  $class = $_POST["searchclass"];
                                                  $month = $_POST['month'];
                                                  $searchquery = "SELECT Student_Firstname,Student_Lastname,Class,".$month." FROM Students WHERE Class = '$class'and ".$month." < 5 ORDER BY ".$month." " ;
                                                  $resultsview = $conn->query($searchquery);
                                                  if ($resultsview->num_rows > 0) {
                                                   while($row = $resultsview->fetch_assoc()) {
                                                     echo "<tr><td>".$row["Student_Firstname"]."</td><td>".$row["Student_Lastname"]."</td><td>".$row["Class"]."</td><td>".$row[$month]."</td><tr>";
                                                   }
                                                  } else {
                                                   echo "<script>alert('No student has submitted their attendance today as of now or you have not entered a relevant class.');</script>";
                                                  }
                                                }
                                               }
                                               $conn->close(); 
                                           
                                           ?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- datatable ends -->
                
            </div>
            <!-- main content inner ends -->


        </div>
        <footer>          
        </footer>
    </div>


    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>

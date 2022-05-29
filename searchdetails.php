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
                    <!-- nav -->
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
                                <li><a>Search Details</a></li>
                                <li>Search Page</li>
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
                    <h3 style="color:white;font-family: 'Times New Roman', Times, serif;" class="mt-3"> Search for Students' Details </h3>
                    <div class="col-12 mt-3" style="font-family: 'Times New Roman', Times, serif;color: #843df9">
                        <div class="card">
                            <div class="card-body" >
                              Search for the students you want by providing very little information about them. All you have to do is 
                              enter the data corresponding to the category you wish to select in the search box and then click the desired category button below to submit the data.
                               For example, if the category is 'full name', enter the full name in the search box below and then click the 'Full Name' button for submission.
                            </div>
                        </div>
                    </div>
                    <div class="row"   style="align-items:center;justify-content:center;">
                        <div class="col-lg-6 mt-5">
                            <form action="searchdetails.php" method="post">
                                <div class="card" style="align-items:center;justify-content:center;background-color:#303640;">
                                    <div class="card-body search-box"  >
                                       <input type="text" name="searchclass" id="searchclass" placeholder="Search..." required>
                                       <i class="ti-search" style="color:white;"></i>
                                    </div>
                                 </div>
                                 <button class="btn btn-warning mb-3" style="color:white;" type="submit" id="first" name="first">First Name</button>
                                <button class="btn btn-success mb-3" type="submit"  id="last" name="last">Last Name</button>
                                <button class="btn btn-primary mb-3" type="submit"  id="full" name="full">Full Name</button>
                                <button class="btn btn-info mb-3" type="submit"  id="attend" name="attend">Attendance</button>
                                <button class="btn btn-danger mb-3" type="submit"  id="lastattend" name="lastattend">Last day Attended</button>
                            </form>  
                        </div>
                    </div>
                                    
                    <!-- datatable starts -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body" style="background-color: #b182ff">
                                <h4 class="header-title">Students</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center" data-page-length='1'>
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Class</th>
                                                <th>Attendance</th>
                                                <th>Last Attended Date</th>
                                                <th>Time of Check In</th>
                                                <th>Phone Number</th>
                                                <th>Email</thn>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                function test_input($data) {
                                                    $data = trim($data);
                                                    $data = stripslashes($data);
                                                    $data = htmlspecialchars($data);
                                                    return $data;
                                                }

                                                function display($searchquery,$conn){
                                                    $resultsview = $conn->query($searchquery);
                                                    $flag = 0;
                                                    if ($resultsview->num_rows > 0) {
                                                     $flag = 1;
                                                     while($row = $resultsview->fetch_assoc()) {
                                                       echo "<tr><td>".$row["Student_Firstname"]."</td><td>".$row["Student_Lastname"]."</td><td>".$row["Class"]."</td><td>".$row["Attendance"]."</td><td>".$row["Last_date"]."</td><td>".$row["Check_in"]."</td><td>".$row["Phone_No"]."</td><td>".$row["Email"]."</td><tr>";
                                                     }
                                                    } else {
                                                     $flag = 0;
                                                    }
                                                    return $flag;
                                                }

                                               if(isset($_POST['first'])){
                                                if($_POST['searchclass']) {
                                                  $data = test_input($_POST["searchclass"]);
                                                  $searchquery = "SELECT Student_Firstname,Student_Lastname,Class,Attendance,Last_date,Check_in,Phone_No,Email FROM Students WHERE Student_Firstname LIKE '%$data%' " ;
                                                  $flag = display($searchquery,$conn);
                                                  if($flag == 0){
                                                    echo "<script>alert('The first name you entered does not exist in the database.Please enter again.');</script>";
                                                  }
                                                }
                                               }

                                               if(isset($_POST['last'])){
                                                if($_POST['searchclass']) {
                                                  $data = test_input($_POST["searchclass"]);
                                                  $searchquery = "SELECT Student_Firstname,Student_Lastname,Class,Attendance,Last_date,Check_in,Phone_No,Email FROM Students WHERE Student_Lastname LIKE '%$data%' " ;
                                                  $flag = display($searchquery,$conn);
                                                  if($flag == 0){
                                                    echo "<script>alert('The last name you entered does not exist in the database.Please enter again.');</script>";
                                                  }
                                                }
                                               }

                                               if(isset($_POST['full'])){
                                                if($_POST['searchclass']) {
                                                  $data = test_input($_POST["searchclass"]);
                                                  $fullname = explode(" ",$data);
                                                  if(count($fullname) == 1){
                                                    $searchquery = "SELECT Student_Firstname,Student_Lastname,Class,Attendance,Last_date,Check_in,Phone_No,Email FROM Students WHERE Student_Firstname LIKE '%$fullname[0]%'" ;
                                                  } else {
                                                    $searchquery = "SELECT Student_Firstname,Student_Lastname,Class,Attendance,Last_date,Check_in,Phone_No,Email FROM Students WHERE Student_Firstname LIKE '%$fullname[0]%' OR Student_Lastname LIKE '%$fullname[1]%'" ; 
                                                  }
                                                  $flag = display($searchquery,$conn);

                                                  if($flag == 0){
                                                    echo "<script>alert('The full name you entered does not exist in the database.Please enter again.');</script>";
                                                  }
                                                }
                                               }

                                               if(isset($_POST['attend'])){
                                                if($_POST['searchclass']) {
                                                  $data = test_input($_POST["searchclass"]);
                                                  $searchquery = "SELECT Student_Firstname,Student_Lastname,Class,Attendance,Last_date,Check_in,Phone_No,Email FROM Students WHERE Attendance LIKE '%$data%' " ;
                                                  $flag = display($searchquery,$conn);
                                                  if($flag == 0){
                                                    echo "<script>alert('There is no student with the amount of attendance you entered in the database.Please enter again.');</script>";
                                                  }
                                                }
                                               }

                                               if(isset($_POST['lastattend'])){
                                                if($_POST['searchclass']) {
                                                  $data = test_input($_POST["searchclass"]);
                                                  $searchquery = "SELECT Student_Firstname,Student_Lastname,Class,Attendance,Last_date,Check_in,Phone_No,Email FROM Students WHERE Last_date LIKE '%$data%' " ;
                                                  $flag = display($searchquery,$conn);
                                                  if($flag == 0){
                                                    echo "<script>alert('The date that you entered does not exist as a last date of attendance for any student in the database.Please enter again.');</script>";
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
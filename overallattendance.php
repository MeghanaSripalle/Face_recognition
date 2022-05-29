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
                                <li>Overall Attendance</li>
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
                    <div class="col-12 mt-5" style="font-family: 'Times New Roman', Times, serif;color: #843df9">
                        <div class="card">
                            <div class="card-body" >
                              You can view the attendance and other details of the students in each class by entering the class in the search box below. You can also access 
                              important contact details like the phone number or email address of the student. You can also 
                              select the month from the available months to view the attendance of all the students of the class for that month. 
                            </div>
                        </div>
                    </div>
                    <form action="overallattendance.php" method="post">
                        <div class="row" >
                            <div class="col-lg-4 col-md-4 mt-5">
                                <select class="custom-select" name="searchclass" id="searchclass" autofocus required>
                                    <option selected >Enter the Class</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                             <div class="col-lg-4 col-md-4 mt-5">
                                <select class="custom-select" name="month" id="month"  required>
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
                                      <input type="submit" name="search" id="search" value="Search" class="btn btn-info btn-rounded mb-3 ">
                             </div>
                             </div>
                        </div>
                    </form>
                                    
                <!-- attendance starts -->
                <div class="card-area" style="padding:1%">
                    <div class="row" >
                    <?php
                        if(isset($_POST['search'])){
                            if($_POST['searchclass'] && $_POST['month'] ) {
                                $class = test_input_admin($_POST["searchclass"]);
                                $month = test_input_admin($_POST['month']);
                                //$curdate = date("F");
                                $searchquery = "SELECT Student_Firstname,Student_Lastname,Class,Attendance,Last_date,Phone_No,Email,".$month."  FROM Students WHERE Class = '$class' ORDER BY Student_Firstname" ;
                                $resultsview = $conn->query($searchquery);
                
                                if ($resultsview->num_rows > 0) {
                                    while($row = $resultsview->fetch_assoc()) {
                                        $first = $row['Student_Firstname'];
                                        $last = $row['Student_Lastname'];
                                        $newquery = "SELECT * FROM ".$month." WHERE Student_Firstname='$first' and Student_Lastname='$last'";
                                        $dates = $conn->query($newquery);
                                        $fullname = $row['Student_Firstname']." ".$row['Student_Lastname'];
                                        echo '<div class="col-lg-3 col-md-6 mt-3" >
                                        <div class="card card-bordered h-100" >
                                           
                                            <div class="card-body">
                                                <div class="title col-lg-12" style="background-color:#cc902a">Name:
                                                '.$fullname.'</div>
                                                <div class="title col-lg-12" style="background-color:#f29891">No. of Days Attended: 
                                                '.$row['Attendance'].'</div>
                                                <div class="title col-lg-12" style="background-color:#f29891">Attendance in '.$month.': 
                                                '.$row[$month].'</div>
                                                <div class="title col-lg-12" style="background-color:#e6da85">Class: 
                                                '.$row['Class'].'</div>
                                                <div class="title col-lg-12" style="background-color:#9ce6dc">Last Day Attended:
                                                '.$row['Last_date'].'</div>
                                                <div class="title col-lg-12" style="background-color:#cc902a">Phone Number:
                                                '.$row['Phone_No'].'</div>
                                                <div class="title col-lg-12" style="background-color:#f29891">Email: 
                                                '.$row['Email'].'</div>
                                                <button type="button" class="btn btn-primary btn-flat btn-lg mt-3" data-toggle="modal" data-target="#'.$last.'">View Attendance</button>
                                                <div class="modal fade" id="'.$last.'">
                                                    <div class="modal-dialog">
                                                         <div class="modal-content">
                                                              <div class="modal-header">
                                                                 <h5 class="modal-title">Student Attendance</h5>
                                                                 <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                             </div>
                                                             <div class="modal-body">
                                                                <div class="single-table">
                                                                    <div class="table-responsive">
                                                                        <table class="table text-center">
                                                                           <thead class="text-uppercase bg-primary">
                                                                                <tr class="text-white">
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col"><i class="ti-check"></i> / <i class="ti-close"></i></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>';
                                            $date = $dates->fetch_assoc();
                                            $nmonth = date('m',strtotime($month));
                                            $year = 2022;
                                            if($nmonth < 5){
                                                $year = 2023;
                                              }

                                            $nd = strtotime($year."-".$nmonth."-01");
                                            $d = date("Y_m_d",$nd);
                                            $newd = str_replace("_","-",$d);
                                            if($date[$d] == 1){
                                                $act = "<i class='ti-check'></i>";
                                            }else if ($date[$d] == 0){
                                                $act = "<i class='ti-close'></i>";
                                            }
                                            echo '<tr><th scope="row">'.$newd.'</th>
                                                <td>'.$act.'</td></tr>';

                                            for($j=1; $j<cal_days_in_month(CAL_GREGORIAN,$nmonth,$year); $j++){
                                                $nd = strtotime("+1 day", $nd);
                                                $dat = date("Y_m_d",$nd);
                                                $newdat = str_replace("_","-",$dat);
                                                if($date[$dat] == 1){
                                                    $act = "<i class='ti-check'></i>";
                                                }else if ($date[$dat] == 0){
                                                    $act = "<i class='ti-close'></i>";
                                                }
                                                echo '<tr><th scope="row">'.$newdat.'</th>
                                                <td>'.$act.'</td></tr>';
                                            }
                                                                            echo '</tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>'; 
                                    }
                                } else {
                                    echo "<script>alert('You have not entered a relevant class or month. Please try again!');</script>";
                                }
                            }
                        }
                        $conn->close(); 
                                           
                        ?>
                    </div>
                </div>
                <!-- attendance ends -->
            </div>
            <!-- main content ends -->
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
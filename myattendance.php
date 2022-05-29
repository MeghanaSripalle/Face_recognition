<?php 
  include 'dbopen_student.php';
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
                                    <li><a href="myattendance.php">My Attendance</a></li> 
                                    <li><a href="confirmattendance.php">Today's Attendance</a></li>
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
                            <h4 class="page-title pull-left">Student Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="homestudent.php">Home</a></li>
                                <li><a href="#">View</a></li>
                                <li>My Attendance</li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php 
                                   $que = "SELECT Student_Firstname,Student_Lastname,Class,Phone_No,Email FROM Students WHERE Username ='" . $studentusername . "' and User_Password = '". $studentpassword . "'";
                                   $result = $conn->query($que);
                                   $row = $result->fetch_assoc();
                                   $name = $row['Student_Firstname']." ".$row['Student_Lastname'];
                                   $class = $row['Class'];
                                   $phoneno = $row['Phone_No'];
                                   $emailaddress = $row['Email'];
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
                <h1 style="color:white;margin-top:1%;font-family: 'Times New Roman', Times, serif;">My Overall Attendance</h1>
                <form action="myattendance.php" method="post">
                   <button class="btn btn-warning mt-3" type="submit" style="color:#303640;" name="check" id="check" >View My Attendance</button>
                </form>
                <!--tracking starts-->
                <div class="col-lg-12 mt-5">
                    <?php
                        if(isset($_POST['check'])){
                            $query = "SELECT Attendance FROM Students WHERE Username ='" . $studentusername . "' and User_Password = '". $studentpassword . "'" ;
                            $check = $conn->query($query);
                            if ($check->num_rows == 1) {
                                while($row = $check->fetch_assoc()) {
                                    echo '<div class="alert alert-info" role="alert">
                                    Your overall attendance till today is <strong>'.$row["Attendance"].' day/days.</strong> 
                                  </div>';
                                        
                                }
                            }
                        }
                    ?>
                </div>

                <h1 style="color:white;margin-top:1%;font-family: 'Times New Roman', Times, serif;">My Monthly Attendance</h1>

                <!--monthly attendance starts-->
                <div class="card-area">
                    <div class="row">
                        <?php

                            $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                            foreach($months as $month){
                                $query = "SELECT Student_Firstname,Student_Lastname, ".$month." FROM Students WHERE Username ='" . $studentusername . "' and User_Password = '". $studentpassword . "' " ;
                                $view = $conn->query($query);
        
                                if ($view->num_rows == 1) {
                                    while($row = $view->fetch_assoc()) {

                                        $first = $row['Student_Firstname'];
                                        $last = $row['Student_Lastname'];
                                        $newquery = "SELECT * FROM ".$month." WHERE Student_Firstname='$first' and Student_Lastname='$last'";
                                        $dates = $conn->query($newquery);
                                        echo '<div class="col-lg-3 col-md-6 mt-5">
                                        <div class="card card-bordered">
                                            <div class="card-body">
                                            <h4 style="color:#843df9;">'.$month.'</h4>
                                                <div class="title col-lg-12" style="background-color:#f29891">No. of Days Attended: 
                                                '.$row[$month].'</div>';
                                        if($row[$month] < 5){
                                        echo'<div class="alert alert-danger" role="alert">
                                                  <strong>Low Attendance!</strong>
                                              </div>';
                                        }else{
                                        echo'<div class="alert alert-success" role="alert">
                                              <strong>Your attendance is above the bar. Keep it up!!</strong>
                                            </div>';
                                        }

                                        echo '<button type="button" class="btn btn-primary btn-flat btn-lg mt-3" data-toggle="modal" data-target="#'.$month.'">View Attendance</button>
                                        <div class="modal fade" id="'.$month.'">
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
                                    if($month == "February"){
                                        $nmonth = 02;
                                    }else{
                                       $nmonth = date('m',strtotime($month));
                                    }
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
                        </div>';
                                         
                                        echo'</div>
                                        </div>
                                    </div>';
                                        
                                    }
                                }
                            } 
                            
                        ?>

                        </div>
                    </div>
                </div>
                <!-- monthly attendance ends-->
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

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>

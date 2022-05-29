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

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>
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
                                <a href="javascript:void(0)" aria-expanded="true"><span>Record</span></a>
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
                                <li><a href="attendanceanalytics.php">View</a></li>
                                <li>Attendance Analytics</li>
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
                <!-- heading area start -->
                <h1 style="color:white;margin-top:1%;font-family: 'Times New Roman', Times, serif;">Visualisation of the Attendance of the Students</h1>
                <!-- heading area end -->
                <div class="row">
                <!--content starts-->
                <div class="col-lg-6 col-md-3 mt-3">
                    <h3 style="font-family: 'Times New Roman', Times, serif;color:#dbaee8;margin-top:1%;">Bar Chart - Overall Attendance of the Students of a Class</h3>
                    <div class="col-lg-6 col-md-3 mt-3">
                         <form method="post" action="attendanceanalytics.php">
                      
                            <select class="custom-select " name="class" id="class" autofocus required style="border-color:#dbaee8">
                            <!--<datalist id="classes">-->
                                <option selected >Enter the Class</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                           <!-- </datalist>-->
                            </select>
                            <button class="btn btn-danger mt-3" type="submit" style="color:#303640;" name="bar" id="bar" >View Bar Chart</button>
                      
                         </form>
                    </div>
                <?php 
                    $names =array("Meghana Sripalle");
                    $days = array("10");
                    if(isset($_POST['bar'])){
                      if($_POST['class']){
                        $class = test_input_admin($_POST['class']);
                        $barchart = "SELECT Attendance,Student_Firstname,Student_Lastname,Class FROM Students WHERE Class = '$class'";
                        $result = $conn->query($barchart);
                        $names = array();
                        $days = array();
                        while($row = $result->fetch_assoc()){
                           $fname = $row['Student_Firstname']." ".$row['Student_Lastname'];
                           $names[] = $fname;
                           $days[] = $row['Attendance'];
    
                        }
                        echo ' <div class="card-area">
                        <div class="row" style="align-items:center;justify-content:center;">
                            <div class="col-lg-12 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <div class="card-body" style="align-items:center;justify-content:center;">
                                       <button class="btn btn-info mt-3" onclick="getchart()" style="color:#303640;text-align:center" id="click" >Click to View Here</button>
                                       <canvas id="bar_chart" class="w-100"></canvas> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>';
                      }
                    }
                ?>
               
               
                <script >
                    function getchart(){
                        var ctx = document.getElementById("bar_chart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                 labels:<?php echo json_encode($names); ?>,
                                 datasets: [{
                                  backgroundColor: [
                                    "#e88285",
                                    "#e39df2",
                                    "#9dbdf2",
                                    "#9df2de",
                                    "#cff7cd",
                                    "#e0edab",
                                    "#e6bc9c",
                                    "#ebabd1"
                                  ],
                                  borderRadius:20,
                                  data:<?php echo json_encode($days); ?>,
                                 }]
                            },
                            options: {
                               legend: {
                                  display: false,
 
                                  labels: {
                                    fontColor: 'black',
                                    fontFamily: 'Circular Std Book',
                                    fontSize: 14,
                                  }
                               },
                           }
                       });
                       const button = document.getElementById("click");
                       button.style.display = "none";
                   }
                </script>
                </div>

                <div class="col-lg-6 col-md-3 mt-3"> 
                    <h3 style="font-family: 'Times New Roman', Times, serif;color:#dbaee8;margin-top:1%;">Finding the Students with Below Average Attendance</h3>
                    <div class="col-lg-6 col-md-3 mt-3">
                         <form method="post" action="attendanceanalytics.php">
                      
                            <select name="averageclass" id="averageclass" class="custom-select" required style="border-color:#dbaee8">
                                <option selected >Enter the Class</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                            <button class="btn btn-success mt-3" type="submit" style="color:#303640;" name="average" id="average" >View Line Chart</button>
                      
                         </form>
                    </div>

                    <?php 
                    if(isset($_POST['average'])){
                      if($_POST['averageclass']){

                        $classnew = test_input_admin($_POST['averageclass']);
                        $findavg = "SELECT AVG(Attendance ) AS Average FROM Students WHERE Class = '$classnew'";
                        $averageresult = $conn->query($findavg);
                        while($res = $averageresult->fetch_assoc()){
                               $avg = $res['Average'];
                        }
                        
                        $belowavgstudents = "SELECT Attendance,Student_Firstname,Student_Lastname,Class FROM Students WHERE Class = '$classnew' and Attendance < ".$avg." ";
                        $findchart = $conn->query($belowavgstudents);
                        $belowavgnames = array();
                        $belowavgdays = array();
                        while($row1 = $findchart->fetch_assoc()){
                           $fullname = $row1['Student_Firstname']." ".$row1['Student_Lastname'];
                           $belowavgnames[] = $fullname;
                           $belowavgdays[] = $row1['Attendance'];
    
                        }

                        $aboveavgstudents = "SELECT Attendance,Student_Firstname,Student_Lastname,Class FROM Students WHERE Class = '$class' and Attendance >= ".$avg." ";
                        $finddataset = $conn->query($aboveavgstudents);
                        $aboveavgnames = array();
                        $aboveavgdays = array();
                        while($row2 = $finddataset->fetch_assoc()){
                           $name = $row2['Student_Firstname']." ".$row2['Student_Lastname'];
                           $aboveavgnames[] = $name;
                           $aboveavgdays[] = $row2['Attendance'];
    
                        }

                        echo ' <div class="card-area">
                        <div class="row" style="align-items:center;justify-content:center;">
                            <div class="col-lg-12 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <div class="card-body" style="align-items:center;justify-content:center;">
                                       <button class="btn btn-info mt-3" onclick="getlinechart()" style="color:#303640;text-align:center" id="linechart" >Click to View Here</button>
                                       <canvas id="line_chart" class="w-100"></canvas> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>';
                      }
                    }
                ?>
               
               <script >
                    function getlinechart(){
                        console.log("Hey");
                        var ctxnew = document.getElementById("line_chart").getContext('2d');
                        var myChart = new Chart(ctxnew, {
                            type: 'line',
                            data: {
                                 labels:<?php echo json_encode($belowavgnames); ?>,
                                 datasets: [{
                                  label : ' Total Attendance',
                                  borderColor: "rgb(227, 91, 152)",
                                  backgroundColor:"rgba(227, 91, 152,0.5)" ,
                                  data:<?php echo json_encode($belowavgdays); ?>
                                 }]
                            },
                            options: {
                            responsive: true,
                            
                               legend: {
                                  position : 'top'
                               },
                              
                            }
                       });
                         
                       const linebutton = document.getElementById("linechart");
                       linebutton.style.display = "none";
                   }
                </script>
                </div>
            </div>
                <!-- content ends-->
            </div>
            <!-- main content inner ends -->
        </div>
        <footer>
        </footer>
    </div>
     <?php $conn->close(); ?>

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



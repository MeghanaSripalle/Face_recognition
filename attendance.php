<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Attendance System For The Students</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        canvas {
            position:absolute;
        }
    </style>
    
</head>
<body>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script> 

    <!-- Face recognition scripts-->
    <script defer src="./face-api.min.js"></script>
    <script defer src="./realtimefaceapi.js"></script>
   
    
    
    <div class="container position-relative" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5" >
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>NDIGO</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="attendance.php" class="nav-item nav-link active">Record Attendance</a>
                    </div>
                </div>
        </nav>
    </div>


   
        <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
    </div>
    <!-- Under Nav End -->

    <!-- Page Header Start -->
    <div>
       <div class="container-fluid bg-secondary" style="width:50vw;height: 75vh;padding:5% 0px 5% 0px" id="divforvideo">
       
           <video id="webcam" name="webcam" class="container-fluid" style="width:80%;height:100%;padding:0px 0px 0px 0px" autoplay muted ></video>
           
       </div>
    </div>
    <!-- Page Header Ends-->
    <div style="display:flex;justify-content:center;">
    <button id="btn_start" style="width:15%;margin:10px" onclick="startCapture()">Start Webcam</button>
    <button id="btn_stop" style="width:15%;margin:10px" onclick="stopCapture()">Stop Webcam</button>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    
</body>

</html>
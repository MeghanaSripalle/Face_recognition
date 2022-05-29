<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn1 = new mysqli($servername, $username, $password);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
  }

//creating the database for storing Attendance
$querydb = "CREATE DATABASE AttendanceSystem";
$conn1->query($querydb);

$conn1->close();

//connecting to the database
$dbname = "AttendanceSystem";
$conn2 = new mysqli($servername, $username, $password,$dbname);
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
  }

//creating the table which stores the login details and other details of the Admins
$query1 = "CREATE TABLE Admins(
    Id int(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Admin_Name char(45) ,
    Last_name char(45),
    Class varchar(3),
    Username varchar(30)  UNIQUE NOT NULL,
    Pass varchar(30)  UNIQUE NOT NULL
    
  )";
$conn2->query($query1);

$queryadmins = "INSERT INTO Admins (Admin_Name,Last_name,Class,Username,Pass) VALUES ('Meghana', 'Sripalle','8','meg123', 'meg');";
$queryadmins .=  "INSERT INTO Admins (Admin_Name,Last_name,Class,Username,Pass) VALUES ('Mary', 'Jane','7', 'mary123', 'mary');";
$queryadmins .=  "INSERT INTO Admins (Admin_Name,Last_name,Class,Username,Pass) VALUES ('Rohan', 'Kapoor','6','rohan123', 'rohan')";

if ($conn2->multi_query($queryadmins) === TRUE) {
  echo "<script>console.log('Table for Admins created!');</script>";
}

$conn2->close();

$conn3 = new mysqli($servername, $username, $password,$dbname);
if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
  }

//creating a table to store the important details of the students
$querystudents = "CREATE TABLE Students(
  Id int(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Username varchar(20) UNIQUE NOT NULL,
  User_Password varchar(20) UNIQUE NOT NULL,     
  Student_Firstname char(30) NOT NULL,
  Student_Lastname char(30) UNIQUE NOT NULL,
  Phone_No bigint(10) UNIQUE NOT NULL,
  Attendance int(3) NOT NULL,
  Email varchar(50) NOT NULL,
  Class varchar(3) NOT NULL,
  Last_date DATE NOT NULL,
  Check_in TIME,
  May int(2) NOT NULL,
  June int(2) NOT NULL,
  July int(2) NOT NULL,
  August int(2) NOT NULL,
  September int(2) NOT NULL,                    
  October int(2) NOT NULL,
  November int(2) NOT NULL,
  December int(2) NOT NULL,
  January int(2) NOT NULL,
  February int(2) NOT NULL,
  March int(2) NOT NULL,
  April int(2) NOT NULL
  
)";
$conn3->query($querystudents);

$querystu = "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April ) 
VALUES ('Meghana123','2001','Meghana', 'Sripalle', '9398312621','0','meghanasripalle@gmail.com','8','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Monica123','1990','Monica', 'Geller', '9398312624','0','monicageller@gmail.com','6','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April ) 
VALUES ('Chandler123','1993','Chandler', 'Bing', '9895312621','0','chandlerbing@gmail.com','6','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Phoebe123','1997','Phoebe', 'Buffay', '8298372624','0','phoebebuffay@gmail.com','6','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Rachel123','1104','Rachel', 'Green', '7298371628','0','rachelgreen@gmail.com','6','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Joey123','9017','Joey', 'Tribbiani', '9293371628','0','joeytribbiani@gmail.com','6','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Ted123','1111','Ted', 'Mosby', '7882371628','0','tedmosby@gmail.com','7','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Barney123','2222','Barney', 'Stinson', '7782471621','0','barneystinson@gmail.com','7','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Robin123','3333','Robin', 'Scherbatsky', '9782362213','0','robinscherbatsky@gmail.com','7','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Lily','4444','Lily', 'Aldrin', '6582371628','0','lilyaldrin@gmail.com','7','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Marshall123','5555','Marshall', 'Eriksen', '8982371628','0','marshall@gmail.com','7','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Millie123','2412','Millie', 'Brown', '9293371611','0','millie@gmail.com','8','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Finn1','2312','Finn', 'Wolfhard', '8897669697','0','finn@gmail.com','8','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Dustin123','2212','Dustin', 'March', '7797669695','0','dustinmarch@gmail.com','8','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Caleb123','3312','Caleb', 'Marsh', '9788665123','0','calebmarsh@gmail.com','8','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Sadie12','4412','Sadie', 'Prince', '6443218970','0','lilyaldrin@gmail.com','8','0','0','0','0','0','0','0','0','0','0','0','0','0');";
$querystu .= "INSERT INTO Students (Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Attendance,Email,Class,Last_date,May,June,July,August,September,October,November,December,January,February,March,April  ) 
VALUES ('Noah123','5512','Noah', 'Hills', '8978671022','0','noahills@gmail.com','8','0','0','0','0','0','0','0','0','0','0','0','0','0')";


if ($conn3->multi_query($querystu) === TRUE) {
  echo "<script>console.log('Table for Students created!');</script>";
}

$conn3->close();

$conn4 = new mysqli($servername, $username, $password,$dbname);
if ($conn4->connect_error) {
    die("Connection failed: " . $conn4->connect_error);
  }

$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
$y = 00;
$year = 2022;
foreach ($months as $mon){
    $y++;
    //echo $mon;
    $monthtable = "CREATE TABLE ".$mon." AS
            SELECT Id,Username, User_Password, Student_Firstname, Student_Lastname, Phone_No, Email,Class
            FROM Students";
    $conn4->query($monthtable);
    if($y < 5){
      $year = 2023;
    }else{
      $year = 2022;
    }
    $date = strtotime($year."-".$y."-01");
    $d = date("Y_m_d",$date);
    $que = "ALTER TABLE ".$mon." ADD ".$d." int(1) DEFAULT '0'";
    $conn4->query($que);

    for($i=1; $i<cal_days_in_month(CAL_GREGORIAN,$y,$year); $i++){
      $date = strtotime("+1 day", $date);
      $dat = date("Y_m_d",$date);
      $que = "ALTER TABLE ".$mon." ADD ".$dat." int(1) DEFAULT '0'";
      $conn4->query($que);
    }
    
}
$conn4->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iNDIGO-Attendance Monitoring System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
</head>
<body>
<div class="container-fluid p-0">
    

            <div class="carousel-item active">
                <img class="w-100" src="img/drahomir-posteby-mach-n4y3eiQSIoc-unsplash.jpg" alt="Image">
      
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>NDIGO</h1>
                    <div class="p-3" style="max-width: 1000px;">
                        <a href="loginstudent.php" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4" style="color:white;font-family: 'Lucida Console', 'Courier New', monospace;">Login as a Student</a><br>
                        <a href="loginteacher.php" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4" style="color:white;font-family: 'Lucida Console', 'Courier New', monospace;">Login as a Teacher</a><br>
                        <a href="attendance.php" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4" style="color:white;font-family: 'Lucida Console', 'Courier New', monospace;">Record your Attendance</a>
                    </div>
                </div>
            </div>
           
        
    
</div>
</body>
</html>

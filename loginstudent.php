<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iNDIGO-Login as a Student</title>
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
    

            <div class="con">
               
                <img class="w-100" src="img/drahomir-posteby-mach-n4y3eiQSIoc-unsplash.jpg" alt="Image">
                
                    
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" >
                <h3 class="m-0 display-5 text-white"><span class="text-primary">S</span>TUDENTS <span class="text-primary">L</span>OGIN</h3>
                <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>NDIGO</h1>
                        <form action="loginstudent.php" method="post">
                          
                            <div class="container1">
                              <label class="login" for="username" ><b>Username:</b></label>
                             <input type="text" placeholder="Enter Username" name="user" id="user" maxlength='20' autofocus required>
                             <br>
                              <label class="login" for="pass" ><b>Password:</b></label>
                              <input type="password" placeholder="Enter Password" name="password" id="password" maxlength='20' required>
                              
                              <button type="submit" name="login_student" id="login_student">Login</button>
                             
                            </div>
                           
                        </form>
                       
                        <button style="width:20%" ><a href="index.php" style="color:white;"> Home </a></button>
                </div>
                
            </div>
           
    </div>
</body>
</html>

<?php
session_start();

  $username = $password = "";
  
  function test_input_user($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "AttendanceSystem";

  $conn = new mysqli($servername, $username,$password,$dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['login_student'])){

    if((($_POST["user"]) && ($_POST["password"])))
    {
      $username = test_input_user($_POST["user"]);
      $password = test_input_user($_POST["password"]);
      $querylogin= "SELECT * FROM Students WHERE Username ='" . $username . "' and User_Password = '". $password . "'";
      $resultlogin = $conn->query($querylogin);
      if($resultlogin->num_rows==0) 
      {
        echo "<script>alert('Username or Password is wrong. Please try again.');</script>";
      } 
      else 
      {
        $_SESSION['studentusername'] = $username;
        $_SESSION['studentpassword'] = $password;
        echo "<script>alert('Welcome ".$_SESSION['studentusername']."!');</script>"; 
        header('Location: homestudent.php');
      }
    }
    else 
    {
      echo "<script>alert('Enter your username and password!');</script>";
    }

  }

$conn->close();
?>
<?php
  
  include('dbopen.php');
  //print_r($_POST);
  $names = $_POST['ndata'];


  foreach ($names as $name){
    $fullname = explode(" ",$name);
    if($fullname[0] == "unknown"){
      $firstname = $fullname[0];
    }else{
      $firstname = $fullname[0];
      $lastname = $fullname[1];
      $curdate = date("F");
      $curdatenew = date("Y_m_d");
      $query = "UPDATE Students SET Attendance = Attendance+1, ".$curdate." = ".$curdate." +1 WHERE Student_Firstname= '$firstname' and Student_Lastname = '$lastname' and Last_date!=CURDATE()";
      $conn->query($query);
      $query1 = "UPDATE Students SET Last_date = CURDATE(), Check_in = CURTIME() WHERE Student_Firstname= '$firstname' and Student_Lastname = '$lastname' and Last_date!=CURDATE()";
      $conn->query($query1);
      $que = "UPDATE ".$curdate." SET ".$curdatenew." = 1 WHERE Student_Firstname= '$firstname' and Student_Lastname = '$lastname'";
      $conn->query($que);
    }
  }
     
  $conn->close();

?>
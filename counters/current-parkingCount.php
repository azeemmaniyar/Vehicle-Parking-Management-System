<?php

    include './includes/dbconn.php';
    //Total Vehicle Entries
    $role=$_SESSION['role'];
    $eid=$_SESSION['eid'];
    if($role=='Admin'){
    $query=mysqli_query($con,"SELECT ID from vehicle_info where date(InTime)=CURDATE();");
}else{
  $query=mysqli_query($con,"SELECT ID from vehicle_info where  eid='$eid' and date(InTime)=CURDATE(); ");  
}
    $count_parkings=mysqli_num_rows($query);

    echo $count_parkings
 ?>
<?php

    include './includes/dbconn.php';
 $role=$_SESSION['role'];
    $eid=$_SESSION['eid'];
    if($role=='Admin'){   
    $query3=mysqli_query($con,"SELECT ID from vehicle_info");
}else{
 $query3=mysqli_query($con,"SELECT ID from vehicle_info where eid='$eid'");   
}
    $count_parkings=mysqli_num_rows($query3);

    echo $count_parkings
 ?>
<?php

    include './includes/dbconn.php';
$role=$_SESSION['role'];
    $eid=$_SESSION['eid'];
    if($role=='Admin'){
    $query=mysqli_query($con,"SELECT ID from  vehicle_info where Status=''");
}else{
   $query=mysqli_query($con,"SELECT ID from  vehicle_info where Status='' and eid='$eid'"); 
}
    $count_parkings=mysqli_num_rows($query);

    echo $count_parkings
 ?>
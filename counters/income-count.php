<?php

    include './includes/dbconn.php';
    $role=$_SESSION['role'];
    $eid=$_SESSION['eid'];
    if($role=='Admin'){
    $sql = "SELECT SUM( ParkingCharge) FROM vehicle_info";
}else if($role=='User'){
 $sql = "SELECT SUM( ParkingCharge) FROM vehicle_info where eid='$eid'";   
}
//die($sql);

        $amountsum = mysqli_query($con, $sql) or die(mysqli_error($sql));
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
        echo $row_amountsum['SUM( ParkingCharge)'];
      //  die($row_amountsum['SUM( ParkingCharge)']);
 ?>
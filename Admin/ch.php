<?php
session_start();
include('../includes/dbconn.php');

 if(isset($_POST['logindb']))
  {
    $adminuser=$_POST['username'];
    $password=$_POST['password'];
   // $_SESSION['role']="Admin";
    $query=mysqli_query($con,"SELECT ID,eid from register where  eid='$adminuser' && pass='$password' ");
    $ret=mysqli_fetch_array($query);

    if($ret>0){
      
      $_SESSION['vpmsaid']=$ret['ID'];
      //die($_SESSION['vpmsaid']);
      $_SESSION['eid']=$ret['eid'];
            $_SESSION['role']="User";
      header('location:../dashboard.php');
    }
    else{
     // echo $adminuser.$password;
      $new_Password=md5($password);
    //  echo $new_Password;
       $query1=mysqli_query($con,"SELECT ID from admin where  Email='$adminuser' && Password='$new_Password' ");
    $ret1=mysqli_fetch_array($query1);
//echo "SELECT ID from admin where  Email='$adminuser' && Password='$new_Password' ".$ret1;
    if($ret1>0){
      
      $_SESSION['vpmsaid']=$ret['ID'];
      $_SESSION['role']="Admin";
      header('location:../dashboard.php');
    }else{
    
    $msg="Login Failed !!";
    echo $msg;
echo '<a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                <b>Click here to Login...</b> 
              </p>
            </a>';
     die();
   }
    }
 echo $adminuser."11111"; die();
 }
 else if(isset($_POST['signdb'])){
$fname=$_POST['fname'];
//$mname=$_POST['mname'];
$lname=$_POST['lname'];
$caddress=$_POST['caddress'];
$email=$_POST['email'];
$cno=$_POST['cno'];
$dept=$_POST['dept'];
$gen=$_POST['gen'];
$age=$_POST['age'];
$bdate=$_POST['bdate'];
$eid=$_POST['eid'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
//echo $fname.$mname.$lname.$caddress.$email.$caddress.$email.$cno.$dept.$gen.$age.$bdate.$eid.$pass.$customFile;
$query=mysqli_query($con,"insert into register(fname,lname,caddress,email,cno,dept,gender,age,bdate,eid,pass,cpass) values('$fname','$lname','$caddress','$email','$cno','$dept','$gen','$age','$bdate','$eid','$pass','$cpass')");
//die($con,"insert into register(fname,mname,lname,caddress,email,cno,dept,gender,age,bdate,eid,pass,cpass) values('$fname','$mname','$lname','$caddress','$email','$cno','$dept','$gen','$age','$bdate','$eid','$pass')");  

if ($query) {
      echo "<script>alert('registered Successfully');</script>";
      echo "<script>window.location.href ='../index.php'</script>";
    } else {
      echo "<script>alert('Something Went Wrong');</script>";       
    }

 }
 else if(isset($_POST['cpass'])){
$eid=$_POST['eid'];
$pass=$_POST['pass'];
$conpass=$_POST['conpass'];
if($pass==$conpass){
$q1=$con->query("update register set pass='$pass' where eid='$eid'");
if($q1){
  echo "<script>alert('Password Changed Successfully');</script>";
  echo "<script>window.location.href ='../index.php'</script>";
}
}
else{
  echo "<script>alert('Password and Confirm Password Must be Same')</script>";
  echo "<script>window.location.href ='../forgotpsw.php'</script>";

}
//echo $eid.$pass.$conpass;
 }
 else{echo "out";}
?>
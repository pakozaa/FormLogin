<?php
include("connection.php");
session_start();
require_once'Mobile_Detect.php';

$detect = New Mobile_Detect;
if(isset($_POST['Username'])){
    $username = $_POST['Username'];
    $password = $_POST['Password']; 

    $sql="SELECT * FROM user 
    WHERE  Username='".$username."' 
    AND  Password='".$password."' ";

    $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1){
            $device="Computer";
            if ( $detect->isMobile() ) {
                $device="Mobile";
            }
            if ( $detect->isTablet() ) {
                $device="Tablet";
            }
            $_SESSION['Username']= $username;
            $_SESSION['Password']= $password;
            $ip=$_SERVER["REMOTE_ADDR"];

            $datenow=date("Y-m-d h:i:sa");

            $sql_Logs ="INSERT INTO `logs`(`ID`, `IP`, `Username`, `Password`, `Device`, `Time_Connect`) VALUES ('','".$ip."','".$username."','".$password."','".$device."','".$datenow."')";
            $result = mysqli_query($con,$sql_Logs);
            if($result){
                header("Location:index.php");
            }
            else{
                        echo "<script>";
                            echo "alert(\" เกิดปัญหาการเก็บ log\");"; 
                            echo "window.history.back()";
                        echo "</script>";}
            
        }
        else{
                        echo "<script>";
                            echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                            echo "window.history.back()";
                        echo "</script>";
    
                    }
    
    }
    else{
    
    
                Header("Location: login.php");
            }
    ?>
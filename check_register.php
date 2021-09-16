<?php
include("connection.php");

if(isset($_POST['Username']) && isset($_POST['Password']) && !empty($_POST['Password']) && !empty($_POST['Password'])){

        
    $username = $_POST['Username'];
    $password = $_POST['Password']; 
    $sql="SELECT * FROM user 
    WHERE  Username='".$username."'";    
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>=1){
                    echo "<script>";
                        echo "alert(\"Username already exists!\");"; 
                        echo "window.history.back()";
                    echo "</script>";
    }
    else{
        
        $sql_reg="INSERT INTO `user`(`id`, `username`, `password`) VALUES ('','".$username."','".$password."')";
        $result = mysqli_query($con,$sql_reg);
        if($result){
            echo("<center>");
            echo("<h1>Register Completed</br></h1>");
		    echo("<div><p>Go to<a href='login.php'>Login</a></div>");
            
            echo("</center>");
        }
        else{
                    echo "<script>";
                        echo "alert(\" ERROR Register\");"; 
                        echo "window.history.back()";
                    echo "</script>";}
        
    }

    }
else{
    echo "<script>";
    echo "alert(\" Please input Username and Password\");"; 
    echo "window.history.back()";
    echo "</script>";}



?>
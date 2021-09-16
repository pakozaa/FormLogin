<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            #logtable {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #logtable td, #logtable th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #logtable tr:nth-child(even){background-color: #f2f2f2;}

            #logtable tr:hover {background-color: #ddd;}

            #logtable th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            }
    </style>
</head>
<body>
    <h1>ข้อมูล Log </h1>
    <table id="logtable">
    <tr>
        <th>IP</th>
        <th>Username</th>
        <th>Password</th>
        <th>Device</th>
        <th>Login_Time</th>
    </tr>
    
        <?php
        $sql="SELECT * FROM `logs`";
        $result = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($result)) {
        echo("<tr>");
        echo("<td>".$row['IP']."</td>");
        echo("<td>".$row['Username']."</td>");
        echo("<td>".$row['Password']."</td>");        
        echo("<td>".$row['Device']."</td>");        
        echo("<td>".$row['Time_Connect']."</td>");
        echo("</tr>");
        }
        ?>  
    </table>
</body>
</html>
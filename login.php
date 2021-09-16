<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit], select {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        
        }

    </style>
</head>
<body>
    <div style="width:30%;margin:auto;">
    <form name="loginForm"action="check_login.php" method="POST"  >
         <label for="Username">Username</label>
         <input type="text" id="Username" name="Username" class="inputtext"></input>
         <br>
         <label for="Password">Password</label>
         <input  id="Password" name="Password" type="text" class="inputtext"></input>
         <br>
         <input type="submit" value="LOG IN" class="inputsubmit"></input>
         <p>Don't have an account? <a href="register.php">Sign up</a></p>
    </form>
    </div>
</body>
</html>
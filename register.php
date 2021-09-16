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
    <script type='text/javascript'>
            function check_char(elm){
                if(!elm.value.match(/^[ก-ฮa-z0-9]+$/i) && elm.value.length>0){
                    alert('ไม่สามารถใช้ตัวอักษรพิเศษได้');
                    elm.value='';
                }
            }
            </script>
</head>
<body>
    <div style="width:30%;margin:auto;">
    <form name="registerform"action="check_register.php" method="POST">
        <h1>Create a New Account</h1>
         <label for="Username">Username</label>
         <input type="text" id="Username" name="Username"  placeholder="username" onkeyup='check_char(this)'></input>
         <br>
         <label for="Password">Password</label>
         <input  id="Password" name="Password" type="text"  placeholder="password" onkeyup='check_char(this)'></input>
         <br>
         <input type="submit" value="create account"></input>
    </form>
    </div>
</body>
</html>
<?php
include('insert.php');
?>

<html>
    <head>
    <title>Ashil</title>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="as1">
            <div class="form-box">
                <div class="button-box">
                    <div id="as2"></div>
                    <button type="button" class="as2" onclick="login()">Log In</button>
                    <button type="button" class="as2"  onclick="reg()">Register</button>
            </div><div class="icons">
                <img src="fb.png">
                <img src="gog.png">
           </div>
           <form id="login" class="input-group" method="POST" action="log.php">
               <input type="text" name="username" class="input-field" placeholder="user-ID"required>
               <input type="text" name="password" class="input-field" placeholder="password"required>
               <input type="checkbox" class="check-box"><span>Remember Password</span>
               <button type="submit" name="btn1" class="submit-btn">Log in</button>
           </form>
           <form   id="reg" class="input-group" method="POST" action="insert.php">
            <input type="text" id="name" name="name" class="input-field" placeholder="Name"required>
            <input type="text" id="email" name="email" class="input-field" placeholder="Email-Id"required>
            <input type="text" name="u_name" class="input-field" placeholder="U-name"required>
            <input type="password" name="password" class="input-field" placeholder="password"required>
            <input type="checkbox" class="check-box"><span>i agree to the terms & conditions</span>
            <button type="submit" name="submit1" class="submit-btn">Registers</button>
        </form>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("reg");
            var z = document.getElementById("as2");

            function reg(){
                x.style.left="-400px";
                y.style.left="20px";
                z.style.left="55px";
            }
            function login(){
                x.style.left="15px";
                y.style.left="400px";
                z.style.left="0px";
            }
        </script>
    </body>
</html>

<html>
    
    <head>
        <title>user registeration form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body >
        <div class="header">
            <h2>Register</h2>
        </div>
        <form action="pro.php" method="post">
            <div class="in-grp">
                <label>username</label>
                <input type="text" name="username"required>
             </div>

             <div class="in-grp">
                <label>Email   </label>
                <input type="email" name="email"   required>
             </div>  

             <div class="in-grp">
                <label>password <i class='fas fa-lock'></i> </label>
                <input type="password" name="password_1"required>
             </div>

             <div class="in-grp">
                <label>confirm password <i class='fas fa-lock'></i> </label>
                <input type="password" name="password_2"required>
             </div>

             <div class="in-grp">
                
                <button type="submit" name="register" class="btn">register</button>
             </div>
             <p class="txt">
                 Already a member?   <a href="login.php">sign in</a>
             </p>
            
        </form>
    </body>
</html>
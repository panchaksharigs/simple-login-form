<html>
    <head>
        <title>register form</title>
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
        <form action="pro.php" method="post">
            <div class="input-grp">
                <label>username</label>
                <input type="text" name="username">
             </div>
             <div class="input-grp">
                <label>Email</label>
                <input type="email" name="email">
             </div>  
             <div class="input-grp">
                <label>password</label>
                <input type="password" name="password_1">
             </div>
             <div class="input-grp">
                <label>conform</label>
                <input type="password" name="password_2">
             </div> 
             <div class="input-grp">
                
                <button type="submit" name="register" class="btn">register</button>
             </div>
             <p>
                 Already a member?<a href="login.php">sign in</a>
             </p>
            
        </form>
    </body>
</html>
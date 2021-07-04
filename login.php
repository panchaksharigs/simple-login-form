
<html>
    <head>
      <title>login</title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>login</h2>
        </div>
        <form action="pro2.php" method="post">
            <div class="in-grp">
                <label>username</label>
                <input type="text" name="username"required>
             </div>
             
             <div class="in-grp">
                <label>password</label>
                <input type="password" name="password"required>
             </div> 
             <div class="in-grp">
                
                <button type="submit" name="login" class="btn">login</button>
             </div>
             <p class="txt">
                 not yet a member  <a href="register.php">sign up</a>
             </p>
            
        </form>
    </body>
</html>

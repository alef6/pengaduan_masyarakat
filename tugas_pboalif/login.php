
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <title>pengaduan masyarakat</title>
    <link rel="stylesheet" type="text/css"href="style.css">
    <meta name="viewport" content="width=device-widht,initial-scale=1.0"/>
</head>
<body>
    <div id ="card">
        <div id="card-content">
            <div class="card-tiltle">
                <h2>LOGIN!</h2>
                <div class="underline-litle">
                </div>
            </div>
            <form action="backhand/login.php"method="post"></form>
            <div>
            <label for="user-email" style="padding-top: 22px">&nbsp;
            email
            </label>
        <input id="user-email" class="form-content" type="text" 
        name="email"  required/>
        <div class="form-border"></div>
            <div>
            <label for="user-password" style="padding-top: 22px">&nbsp;
            pasword
            </label>
        <input id="user-pasword" class="form-content" type="password" 
        name="password"  required/>
        <div class="form-border"></div>
            </div>
        

        <div class="link">
            <a href="remember.php">remember</a>
        </div>

            
</a>
             <input id="submit-btn" type="submit" name="submit" value="LOGIN">
             
        </div>
    </div>
</body>
</html>

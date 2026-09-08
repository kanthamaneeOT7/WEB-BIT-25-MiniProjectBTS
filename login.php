<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <form class="login-form" action="check_login.php" method="post">
            <h1>Welcome Back</h1>
            <p class="login-sub">Sign in to manage the album archive</p>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn-save btn-login">Login</button>
        </form>
    </div>
</div>

</body>
</html>
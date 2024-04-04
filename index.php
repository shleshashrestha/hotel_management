<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System - Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <h1>Hotel Management System</h1>
    </header>


    <form action="abab.php " method="post">


    <main>
        <div class="login-container">
            <h2>Login</h2>
            <form id="login-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <p class="register-link">No Account?</p>
            <button class="create-account-btn" onclick="window.location.href='register.html'">Create New Account</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Hotel Management System. All rights reserved.</p>
    </footer>
</form>
</body>
</html>

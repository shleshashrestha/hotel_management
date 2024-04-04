<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register</title>
    <link rel="stylesheet" href="new_reg.css">
</head>
<body>
    <header>
        <h1>Hotel Management System</h1>
    </header>

    <main>
        <div class="register-container">
            <h2>Create New Account</h2>
            <form id="register-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Register</button>
            </form>
            <p class="login-link">Already have an account?</p>
            <button class="login-btn" onclick="window.location.href='login.html'">Login</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Hotel Management System. All rights reserved.</p>
    </footer>
</body>
</html>

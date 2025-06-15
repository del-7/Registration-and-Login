<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Signup.css">
    <title>Sign Up</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">fiDell</a>

        <nav class="navbar">
            <a href="Login.php">Login</a>
            <a href="index.php">Home</a>

        </nav>
    </header>

    <div class="wrapper">
        <form action="register.php" method="post">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter Email Address" required>
                <i class='bx bx-envelope'></i>
            </div>

            <div class="input-box">
                <input type="password"name="password"  placeholder="Enter password" required>
                <i class='bx bxs-lock'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Confirm password" required>
                <i class='bx bxs-lock'></i>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox">Remember me
                </label>
            </div>
            <button type="submit" class="btn" value="sign Up" name="signUp">Sign Up</button>

            <div class="signup">
                <p>Have an account? <a href="Login.php">Login</a></p>
            </div>
        </form>
    </div>
    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-whatsapp' ></i></a>
            <a href="#"><i class='bx bxl-linkedin' ></i></a>
            <a href="#"><i class='bx bx-x' ></i></a>
        </div>

        <ul class="list">
            <li>
                <a href="#">FAQ</a>
            </li>
            <li>
                <a href="#">About Us</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
            <li>
                <a href="#">Privacy Policy</a>
            </li>
        </ul>
        
    </footer>
</body>
</html>
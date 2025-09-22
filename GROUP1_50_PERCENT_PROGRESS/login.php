<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
      rel="stylesheet"
    />
     <link rel="stylesheet" href="../GROUP1_50_PERCENT_PROGRESS/CSS/style.css" />
    <title>Login</title>
</head>
<body>

    <!-- MAIN -->
    <section>
        <div class="login-container">
            <img src="../GROUP1_50_PERCENT_PROGRESS/IMAGES/LOGO/SailSure_Final_02_bgremoved.png" alt="SailSure Logo">
        
            <form id="loginForm">
                <div class="input-box">
                    <i class="ri-user-line"></i>
                    <input type="text" id="username" placeholder="USERNAME" required>
                </div>
                <div class="input-box">
                    <i class="ri-lock-line"></i>
                    <input type="password" id="password" placeholder="PASSWORD" required>
                    <i class="ri-lock-unlock-line" id="togglePassword" style="position:absolute; right:10px; top:50%; transform:translateY(-50%); cursor:pointer;"></i>
                </div>

                <button type="submit" class="login-btn">LOGIN</button>
            </form>

            <div class="error-message" id="errorMsg"></div>

            <div class="signup-text">Don’t have an account yet? <a href="#">Sign Up</a></div>
        </div>
    </section>

    <script src="../GROUP1_50_PERCENT_PROGRESS/JS/script.js"></script>
</body>
</html>
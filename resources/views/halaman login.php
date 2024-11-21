<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        .container {
            width: 400px;
            padding: 60px 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }
        .signup-link {
            position: absolute;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 14px;
            margin-bottom: 10px;
        }
        .signup-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
        h1 {
            margin-bottom: 24px;
        }
        .input-container {
            margin: 20px 0;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .button {
            width: 100%;
            padding: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 16px;
        }
        .button:hover {
            background-color: #218838;
        }
        .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
        }
        .social-login button {
            width: 48%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #f1f1f1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .social-login button img {
            width: 18px;
            height: 18px;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="signup-link">
            <p>Belum punya akun? <a href="#">Sign Up</a></p>
        </div>
        <h1>Sign In</h1>
        <p>Enter your email and password to login to your account.</p>
        <form>
            <div class="input-container">
                <input type="text" placeholder="Email Address" required>
            </div>
            <div class="input-container">
                <input type="password" placeholder="8+ strong password" required>
            </div>
            <button class="button" type="submit">Sign In</button>
        </form>
        <hr>
        <p>Or sign in with</p>
        <div class="social-login">
            <button>
                <img src="google.png" alt="Google Logo">
                Google
            </button>
            <button>
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
                Facebook
            </button>
        </div>
    </div>
</body>
</html>

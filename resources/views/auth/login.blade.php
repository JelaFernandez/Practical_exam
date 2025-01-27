<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laravel App</title>
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light blue background */
            color: #333; /* Dark text for contrast */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
            height: 100vh; /* Make the page take full height */
        }

        h1 {
            color: #1e3a8a; /* Dark blue for headings */
            margin-bottom: 20px;
        }

        /* Login form container */
        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Limit the width */
        }

        .login-container h2 {
            color: #1e3a8a;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Form styling */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="email"], input[type="password"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            width: 100%;
        }

        button {
            background-color: #1e40af; /* Blue background */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2563eb; /* Lighter blue on hover */
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer a {
            color: #1e40af;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Input -->
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
            
            <!-- Password Input -->
            <input type="password" name="password" placeholder="Password" required>

            <!-- Remember Me Checkbox -->
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>

            <!-- Submit Button -->
            <button type="submit">Login</button>
        </form>

        <div class="form-footer">
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>

</body>
</html>

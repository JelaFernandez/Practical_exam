<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light blue background */
            color: #333; /* Dark text for contrast */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;  /* Stack the content and footer */
            min-height: 100vh;  /* Make the body take full height */
        }

        h1, h2 {
            color: #1e3a8a; /* Dark blue for headings */
        }

        /* Blue buttons */
        button, a {
            background-color: #1e40af; /* Blue background */
            color: white; /* White text */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        button:hover, a:hover {
            background-color: #2563eb; /* Lighter blue on hover */
        }

        /* Blue card container */
        .card {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 24px;
            color: #1e3a8a;
        }

        /* Form input styling */
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* General layout */
        .container {
            width: 80%;
            margin: 0 auto;
            flex-grow: 1;  /* Ensures the container takes up remaining space */
        }

        /* Logout button styling */
        .logout-btn {
            background-color: #e53e3e; /* Red color for logout */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            position: fixed;
            bottom: 20px;  /* Position 20px from the bottom */
            right: 20px;   /* Position 20px from the right */
        }

        .logout-btn:hover {
            background-color: #f87171; /* Lighter red on hover */
        }

    </style>
</head>
<body>
    <div class="container">
        @yield('content') 
    </div>

    @if(auth()->check())
        <!-- Logout button is now positioned at the bottom -->
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    @endif
</body>
</html>

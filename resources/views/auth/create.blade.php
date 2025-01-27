<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
    <style>
        body {
            font-family: 'Comic Sans MS', 'Comic Sans', cursive;
            background-color: #ffe4e1;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            background: #fffaf0;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #ff69b4;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }
        button {
            width: 100%;
            background: #ff69b4;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #ff1493;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            color: #ff69b4;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required placeholder="Enter post title">

            <label for="body">Body:</label>
            <textarea name="body" id="body" rows="5" required placeholder="Write something cute..."></textarea>

            <button type="submit">Create Post</button>
        </form>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </div>
</body>
</html>

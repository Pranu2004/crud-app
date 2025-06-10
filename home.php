<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD App Navigation</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #e2e2e2, #ffffff);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 30px;
        }

        .btn-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .nav-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.3s ease;
            min-width: 180px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .nav-btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        @media (max-width: 600px) {
            .nav-btn {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <h1>Welcome to the CRUD Blog App</h1>

    <div class="btn-container">
        <button class="nav-btn" onclick="navigate('register.php')">🔐 Register</button>
        <button class="nav-btn" onclick="navigate('login.php')">🔓 Login</button>
        <button class="nav-btn" onclick="navigate('dashboard.php')">📋 View Posts</button>
        <button class="nav-btn" onclick="navigate('create.php')">✍️ Create Post</button>
        <button class="nav-btn" onclick="navigate('edit.php?id=1')">🛠️ Edit Sample Post</button>
        <button class="nav-btn" onclick="navigate('delete.php?id=1')">❌ Delete Sample Post</button>
    </div>

    <script>
        function navigate(url) {
            window.location.href = url;
        }
    </script>

</body>
</html>

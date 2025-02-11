<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 25px;
            border-radius: 15px;
            color: white;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        .menu-button {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }
        .menu-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }
        .menu-button i {
            font-size: 48px;
            color: #667eea;
            margin-bottom: 15px;
        }
        .menu-button h3 {
            margin: 10px 0;
            color: #2d3748;
        }
        .menu-button p {
            color: #718096;
            margin: 0;
        }
        .logout-btn {
            background: rgba(255,255,255,0.2);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .logout-btn:hover {
            background: rgba(255,255,255,0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Parent Dashboard</h1>
            <button class="logout-btn" onclick="logout()">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </div>

        <div class="button-container">
            <button class="menu-button" onclick="window.location.href='parent-dashboard.html'">
                <i class="fas fa-file-medical"></i>
                <h3>Diagnostic Report</h3>
                <p>Fill out a new diagnostic assessment</p>
            </button>

            <button class="menu-button" onclick="window.location.href='saved-files.html'">
                <i class="fas fa-folder-open"></i>
                <h3>Saved Files</h3>
                <p>View your submitted assessments</p>
            </button>
        </div>
    </div>

    <script>
        window.onload = function() {
            const userStatus = sessionStorage.getItem('userStatus');
            if (!userStatus || userStatus !== 'Parent') {
                window.location.href = 'login.html';
            }
        }

        function logout() {
            sessionStorage.clear();
            window.location.href = 'login.html';
        }
    </script>
</body>
</html> 
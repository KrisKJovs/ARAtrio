<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specialist Dashboard - Ara</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
        }

        .header {
            background: linear-gradient(135deg, #6B48FF 0%, #8C6FFF 100%);
            color: white;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            padding: 5px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .user-info span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: background-color 0.2s ease;
        }

        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .welcome-section {
            background: linear-gradient(to right, #ffffff, #f8f9ff);
            border-left: 5px solid #6B48FF;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .action-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #eee;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .action-card:hover {
            transform: translateY(-5px);
        }

        .action-card i {
            font-size: 2.5rem;
            color: #6B48FF;
            margin-bottom: 1.5rem;
        }

        .action-card h3 {
            color: #333;
            margin-bottom: 0.5rem;
        }

        .action-card p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            width: 80%;
            background: #6B48FF;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s ease;
        }

        .action-btn:hover {
            background: #5a3dd8;
        }
    </style>
</head>
<body>
    <header class="header">
        <img src="images/AraLogo.png" alt="Ara Logo" class="logo">
        <div class="user-info">
            <span><i class="fas fa-user-circle"></i><span id="specialistEmail"></span></span>
            <button class="logout-btn" onclick="logout()">
                <i class="fas fa-sign-out-alt"></i>Logout
            </button>
        </div>
    </header>

    <div class="dashboard-container">
        <section class="welcome-section">
            <h1>Welcome, Specialist</h1>
            <p>Manage your assessments and track student progress</p>
        </section>

        <div class="actions-grid">
            <div class="action-card">
                <i class="fas fa-clipboard-list"></i>
                <h3>Assessment</h3>
                <p>Create and manage student assessments</p>
                <button class="action-btn" onclick="location.href='specialist-assessment.html'">
                    <i class="fas fa-arrow-right"></i>Go to Assessment
                </button>
            </div>

            <div class="action-card">
                <i class="fas fa-chart-line"></i>
                <h3>Progress</h3>
                <p>Track and analyze student progress</p>
                <button class="action-btn" onclick="location.href='specialist-progress.html'">
                    <i class="fas fa-arrow-right"></i>View Progress
                </button>
            </div>
        </div>
    </div>

    <script>
        // Check if user is logged in as specialist
        window.onload = function() {
            const userStatus = sessionStorage.getItem('userStatus');
            const userEmail = sessionStorage.getItem('userEmail');
            
            if (userStatus !== 'Specialist') {
                window.location.href = 'login.html';
                return;
            }
            
            document.getElementById('specialistEmail').textContent = userEmail;
        }

        function logout() {
            sessionStorage.clear();
            window.location.href = 'login.html';
        }
    </script>
</body>
</html> 
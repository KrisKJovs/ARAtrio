<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARA</title>

    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="shapes">
    </div>
    
    <div class="login-container">
        <img src="images/AraLogo.png" 
             alt="Ara Logo" 
             class="logo">
        <h2>Welcome to ARA</h2>
        <!-- <p class="welcome-text">Automated Reporting Platform</p> -->
        <form id="loginForm" onsubmit="return validateLogin(event)">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <div id="errorMessage" class="error-message"></div>
    </div>

    <script>
        const users = [
            { email: 'tryadmin@gg.com', password: '1.try23', status: 'Admin' },
            { email: 'teach@gg.com', password: '1.try23', status: 'Teacher' },
            { email: 'parent@gg.com', password: '1.try23', status: 'Parent' },
            { email: 'specialist@gg.com', password: '1.try23', status: 'Specialist' }
        ];

        // Add floating shapes animation
        function createShapes() {
            const shapes = document.querySelector('.shapes');
            for (let i = 0; i < 15; i++) {
                const shape = document.createElement('div');
                shape.classList.add('shape');
                shape.style.width = Math.random() * 100 + 'px';
                shape.style.height = shape.style.width;
                shape.style.left = Math.random() * 100 + '%';
                shape.style.top = Math.random() * 100 + '%';
                shape.style.animation = `float ${Math.random() * 10 + 5}s linear infinite`;
                shapes.appendChild(shape);
            }
        }

        // Update error message display
        function showError(message) {
            const errorMessage = document.getElementById('errorMessage');
            errorMessage.style.display = 'block';
            errorMessage.textContent = message;
        }

        // Modified validateLogin function
        function validateLogin(event) {
            event.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');
            
            const user = users.find(u => u.email === email && u.password === password);
            
            if (user) {
                // Store user status in session storage
                sessionStorage.setItem('userStatus', user.status);
                sessionStorage.setItem('userEmail', user.email);
                
                // Redirect based on user status
                switch(user.status) {
                    case 'Admin':
                        window.location.href = 'admin-dashboard.html';
                        break;
                    case 'Teacher':
                        window.location.href = 'teacher-dashboard.html';
                        break;
                    case 'Parent':
                        window.location.href = 'parent-dashboard.html';
                        break;
                    case 'Specialist':
                        window.location.href = 'specialist-dashboard.html';
                        break;
                }
            } else {
                showError('Invalid email or password');
            }
            return false;
        }

        // Initialize shapes on load
        createShapes();
    </script>

    <style>
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
            100% { transform: translateY(0) rotate(360deg); }
        }
    </style>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard - Ara</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 32px;
            background: linear-gradient(135deg, #6B48FF, #8067FF);
            color: white;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(107, 72, 255, 0.1);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info i {
            font-size: 24px;
            margin-right: 12px;
        }

        .logout-btn {
            background-color: white;
            color: #6B48FF;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .input-form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .form-section {
            margin-bottom: 30px;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #6B48FF;
        }

        .section-header i {
            font-size: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .submit-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 200px;
            margin: 0 auto;
            background-color: #6B48FF;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .submit-btn:hover {
            background-color: #5a3dd8;
        }

        .loading {
            display: none;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        <div class="user-info">
            <i class="fas fa-chalkboard-teacher"></i>
            <div>
                <h2>Teacher Dashboard</h2>
                <span id="teacherEmail"></span>
            </div>
        </div>
        <button class="logout-btn" onclick="logout()">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </div>

    <div class="input-form">
        <form id="teacherInputForm" onsubmit="return submitForm(event)">
            <div class="form-section">
                <div class="section-header">
                    <i class="fas fa-child"></i>
                    <h2>Child Information</h2>
                </div>
                <div class="form-group">
                    <label for="childName">Name:</label>
                    <input type="text" id="childName" required>
                </div>
                <div class="form-group">
                    <label for="level">Level:</label>
                    <input type="text" id="level" required>
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" required>
                </div>
            </div>

            <div class="form-section">
                <div class="section-header">
                    <i class="fas fa-book-open"></i>
                    <h2>Service Overview</h2>
                </div>
                <div class="form-group">
                    <label for="sessions">Number of Sessions Attended:</label>
                    <input type="number" id="sessions" required>
                </div>
                
                <div class="form-group">
                    <label for="prewriting">Prewriting:</label>
                    <textarea id="prewriting" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="english">English:</label>
                    <textarea id="english" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="math">Math:</label>
                    <textarea id="math" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="science">Science:</label>
                    <textarea id="science" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="arts">Arts/Fine Motor:</label>
                    <textarea id="arts" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="behavior">Classroom Behavior:</label>
                    <textarea id="behavior" rows="3"></textarea>
                </div>
            </div>

            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane"></i>
                <span>Submit Report</span>
                <i class="fas fa-spinner loading"></i>
            </button>
        </form>
    </div>

    <script>
        // Check if user is logged in as teacher
        window.onload = function() {
            const userStatus = sessionStorage.getItem('userStatus');
            const userEmail = sessionStorage.getItem('userEmail');
            
            if (userStatus !== 'Teacher') {
                window.location.href = 'login.html';
                return;
            }
            
            document.getElementById('teacherEmail').textContent = userEmail;
        }

        function logout() {
            sessionStorage.clear();
            window.location.href = 'login.html';
        }

        function submitForm(event) {
            event.preventDefault();
            const submitBtn = document.querySelector('.submit-btn');
            const loadingIcon = submitBtn.querySelector('.loading');
            const submitText = submitBtn.querySelector('span');
            const submitIcon = submitBtn.querySelector('.fa-paper-plane');
            
            // Show loading state
            submitBtn.disabled = true;
            loadingIcon.style.display = 'inline-block';
            submitIcon.style.display = 'none';
            submitText.textContent = 'Submitting...';

            // Simulate API call
            setTimeout(() => {
                alert('Form submitted successfully!');
                
                // Reset button state
                submitBtn.disabled = false;
                loadingIcon.style.display = 'none';
                submitIcon.style.display = 'inline-block';
                submitText.textContent = 'Submit Report';
            }, 1500);

            return false;
        }
    </script>
</body>
</html> 
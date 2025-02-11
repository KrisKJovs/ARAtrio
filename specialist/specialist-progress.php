<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Progress Report - Ara</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
        }

        .progress-form {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #2c3e50;
            text-align: center;
        }

        .section {
            margin-bottom: 25px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        h3 {
            color: #2c3e50;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        h3 i {
            color: #6B48FF;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin: 10px 0;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .goal-section {
            border: 1px solid #e1e1e1;
            background: #fafafa;
            transition: all 0.3s ease;
        }

        .goal-section:hover {
            border-color: #6B48FF;
            transform: translateY(-2px);
        }

        textarea {
            width: 100%;
            min-height: 80px;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .submit-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .submit-btn:active {
            transform: scale(0.98);
        }

        .checkbox-item:hover {
            color: #6B48FF;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            outline: none;
            border-color: #6B48FF;
            box-shadow: 0 0 0 2px rgba(107, 72, 255, 0.1);
        }

        /* Update header styles */
        .header {
            position: sticky;
            top: 0;
            background-color: #6B48FF;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo-section img {
            height: 45px;
            width: 45px;
            cursor: pointer;
            background: white;
            border-radius: 50%;
            padding: 5px;
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-email {
            color: white;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logout-btn {
            padding: 6px 12px;
            background: white;
            color: #333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: #f1f1f1;
        }

        .add-goal-btn {
            background: #28a745;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
        }

        .remove-btn {
            background: #dc3545;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .goal-section {
            margin-bottom: 20px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <!-- Update header structure -->
    <div class="header">
        <div class="logo-section">
            <img src="./images/AraLogo.png" alt="Ara Logo" onclick="window.location.href='specialist-dashboard.html'">
        </div>
        <div class="user-section">
            <div class="user-email">
                <i class="fas fa-user-circle"></i>
                specialist@gg.com
            </div>
            <button class="logout-btn" onclick="window.location.href='login.html'">
                Logout
            </button>
        </div>
    </div>

    <div class="progress-form">
        <h1>Weekly Progress Report</h1>
        <h2>Specialist Input</h2>

        <div class="section">
            <h3><i class="fas fa-child"></i> Child Information</h3>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div style="display: flex; gap: 20px;">
                <div class="form-group" style="flex: 1;">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age">
                </div>
                <div class="form-group" style="flex: 1;">
                    <label for="level">Level:</label>
                    <input type="text" id="level" name="level">
                </div>
                <div class="form-group" style="flex: 1;">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date">
                </div>
            </div>
        </div>

        <div class="section">
            <h3><i class="fas fa-clipboard-list"></i> Service Overview</h3>
            <div class="form-group">
                <label for="sessions">Number of Sessions Attended:</label>
                <input type="number" id="sessions" name="sessions">
            </div>
            
            <label>Type of Special Needs:</label>
            <div class="checkbox-group">
                <div class="checkbox-item">
                    <input type="checkbox" id="occupational" name="therapy">
                    <label for="occupational">Occupational Therapy</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="speech" name="therapy">
                    <label for="speech">Speech and Language Therapy</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="physical" name="therapy">
                    <label for="physical">Physical Therapy</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="behavioral" name="therapy">
                    <label for="behavioral">Behavioral Therapy</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="academic" name="therapy">
                    <label for="academic">Academic Support</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="other" name="therapy">
                    <label for="other">Other:</label>
                    <input type="text" id="other-specify" style="width: 150px;">
                </div>
            </div>
        </div>

        <div class="section">
            <h3><i class="fas fa-bullseye"></i> Weekly Goals and Objectives</h3>
            <div id="goals-container">
                <!-- Goals will be added here dynamically -->
            </div>
            <button class="add-goal-btn" onclick="addGoal()">
                <i class="fas fa-plus"></i> Add Goal
            </button>
        </div>

        <div class="section">
            <h3><i class="fas fa-chart-line"></i> Detailed Progress Summary</h3>
            <div class="form-group">
                <label>Strengths Observed This Week:</label>
                <textarea id="strengths"></textarea>
            </div>
            <div class="form-group">
                <label>Areas for Improvement This Week:</label>
                <textarea id="improvements"></textarea>
            </div>
            <div class="form-group">
                <label>Therapist's Comments:</label>
                <textarea id="comments"></textarea>
            </div>
        </div>

        <button class="submit-btn" onclick="submitProgress()">
            <i class="fas fa-paper-plane"></i>
            Submit Progress Report
        </button>
    </div>

    <script>
        function submitProgress() {
            // Basic validation
            const name = document.getElementById('name').value;
            const age = document.getElementById('age').value;
            
            if (!name || !age) {
                alert('Please fill in all required fields');
                return;
            }

            // Show loading state
            const submitBtn = document.querySelector('.submit-btn');
            const originalContent = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            submitBtn.disabled = true;

            // Simulate submission (replace with actual submission logic)
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check"></i> Submitted Successfully!';
                submitBtn.style.background = '#4CAF50';
                
                // Reset button after 2 seconds
                setTimeout(() => {
                    submitBtn.innerHTML = originalContent;
                    submitBtn.style.background = '#6B48FF';
                    submitBtn.disabled = false;
                }, 2000);
            }, 1500);
        }

        let goalCount = 0;

        function addGoal() {
            goalCount++;
            const goalContainer = document.getElementById('goals-container');
            
            const goalSection = document.createElement('div');
            goalSection.className = 'goal-section';
            goalSection.innerHTML = `
                <h4>Goal ${goalCount}</h4>
                <div class="form-group">
                    <label>Goal:</label>
                    <input type="text" placeholder="Enter goal">
                </div>
                <div class="form-group">
                    <label>Objective:</label>
                    <input type="text" placeholder="Enter objective">
                </div>
                <div class="form-group">
                    <label>Progress:</label>
                    <textarea placeholder="Enter progress"></textarea>
                </div>
                <button class="remove-btn" onclick="removeGoal(this)">Remove</button>
            `;
            
            goalContainer.appendChild(goalSection);
        }

        function removeGoal(button) {
            button.parentElement.remove();
            // Optionally renumber remaining goals
            updateGoalNumbers();
        }

        function updateGoalNumbers() {
            const goals = document.querySelectorAll('.goal-section h4');
            goals.forEach((goal, index) => {
                goal.textContent = `Goal ${index + 1}`;
            });
            goalCount = goals.length;
        }

        // Add first goal automatically
        window.onload = function() {
            addGoal();
        }
    </script>
</body>
</html> 
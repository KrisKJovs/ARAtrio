<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Progress Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .report-title {
            text-align: center;
            color: #003366;
            margin-bottom: 30px;
        }
        .section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 25px;
        }
        .section-title {
            color: #2c3e50;
            font-size: 1.2em;
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 15px;
        }
        .info-item {
            background: white;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #e0e0e0;
        }
        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        .checkbox-item {
            background: white;
            padding: 8px 12px;
            border-radius: 4px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        .checkbox-item:hover {
            background: #f0f7ff;
        }
        .goal-section {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .goal-header {
            background: #f8f9fa;
            padding: 10px 15px;
            font-weight: bold;
            border-bottom: 1px solid #e0e0e0;
        }

        .goal-content {
            padding: 15px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .input-group textarea {
            min-height: 80px;
            resize: vertical;
        }

        .remove-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            width: 100px;
        }

        .remove-btn:hover {
            background-color: #c82333;
        }

        .add-goal-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .add-goal-btn:hover {
            background-color: #218838;
        }
        .header {
            position: sticky;
            top: 0;
            background-color: #003366;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            cursor: pointer;
        }

        .logo-section img {
            height: 40px;
            width: auto;
        }

        .logout-btn {
            background-color: #002855;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logout-btn:hover {
            background-color: #001f40;
        }

        body {
            margin-top: 0;
            padding-top: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo-section" onclick="window.location.href='admin-dashboard.html'">
            <img src="./images/AraLogo.png" alt="Ara Logo">
            <h2><i class="fas fa-chart-line"></i> Weekly Progress Report</h2>
        </div>
        <button class="logout-btn" onclick="window.location.href='login.html'">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </button>
    </div>

    <div class="section">
        <div class="section-title">
            <i class="fas fa-child"></i> Child Information
        </div>
        <div class="info-grid">
            <div class="info-item">
                <label>Name:</label>
                <span id="childName"></span>
            </div>
            <div class="info-item">
                <label>Age:</label>
                <span id="childAge"></span>
            </div>
            <div class="info-item">
                <label>Level:</label>
                <span id="childLevel"></span>
            </div>
            <div class="info-item">
                <label>Date:</label>
                <span id="reportDate"></span>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">
            <i class="fas fa-hands-helping"></i> Service Overview
        </div>
        <div class="info-item">
            <label>Number of Sessions Attended:</label>
            <span id="sessionsAttended"></span>
        </div>
        
        <div style="margin-top: 15px;">
            <div>Type of Special Needs:</div>
            <div>Services Provided This Week:</div>
            <div class="checkbox-group">
                <div class="checkbox-item">
                    <input type="checkbox" id="occupational">
                    <label for="occupational">Occupational Therapy</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="speech">
                    <label for="speech">Speech and Language Therapy</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="physical">
                    <label for="physical">Physical Therapy</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="behavioral">
                    <label for="behavioral">Behavioral Therapy</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="academic">
                    <label for="academic">Academic Support</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="other">
                    <label for="other">Other:</label>
                    <input type="text" id="otherText" style="margin-left: 5px;">
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">
            <i class="fas fa-bullseye"></i> Weekly Goals and Objectives
        </div>
        
        <div id="goalsContainer">
            <div class="goal-section">
                <div class="goal-header">Goal 1</div>
                <div class="goal-content">
                    <div class="input-group">
                        <label>Goal:</label>
                        <input type="text" placeholder="Enter goal">
                    </div>
                    <div class="input-group">
                        <label>Objective:</label>
                        <input type="text" placeholder="Enter objective">
                    </div>
                    <div class="input-group">
                        <label>Progress:</label>
                        <textarea placeholder="Enter progress"></textarea>
                    </div>
                    <button class="remove-btn" onclick="removeGoal(this)">Remove</button>
                </div>
            </div>
        </div>

        <button class="add-goal-btn" onclick="addGoal()">
            <i class="fas fa-plus"></i> Add Goal
        </button>
    </div>

    <div class="section">
        <div class="section-title">
            <i class="fas fa-clipboard-list"></i> Detailed Progress Summary
        </div>
        <div class="input-group">
            <label>Strengths Observed This Week:</label>
            <textarea id="strengths" placeholder="Enter observed strengths"></textarea>
        </div>
        <div class="input-group">
            <label>Areas for Improvement This Week:</label>
            <textarea id="improvements" placeholder="Enter areas needing improvement"></textarea>
        </div>
        <div class="input-group">
            <label>Recommendations for Next Week:</label>
            <textarea id="recommendations" placeholder="Enter recommendations"></textarea>
        </div>
    </div>

    <div class="section">
        <div class="section-title">
            <i class="fas fa-comments"></i> Comments from Therapists and Teachers
        </div>
        <div class="input-group">
            <label>Therapist's Comments:</label>
            <textarea id="therapistComments" placeholder="Enter therapist's comments"></textarea>
        </div>
        <div class="input-group">
            <label>Academic Support Teacher's Comments:</label>
            <textarea id="teacherComments" placeholder="Enter teacher's comments"></textarea>
        </div>
    </div>

    <script>
        let goalCount = 1;

        function addGoal() {
            goalCount++;
            const goalsContainer = document.getElementById('goalsContainer');
            const goalSection = document.createElement('div');
            goalSection.className = 'goal-section';
            goalSection.innerHTML = `
                <div class="goal-header">Goal ${goalCount}</div>
                <div class="goal-content">
                    <div class="input-group">
                        <label>Goal:</label>
                        <input type="text" placeholder="Enter goal">
                    </div>
                    <div class="input-group">
                        <label>Objective:</label>
                        <input type="text" placeholder="Enter objective">
                    </div>
                    <div class="input-group">
                        <label>Progress:</label>
                        <textarea placeholder="Enter progress"></textarea>
                    </div>
                    <button class="remove-btn" onclick="removeGoal(this)">Remove</button>
                </div>
            `;
            goalsContainer.appendChild(goalSection);
        }

        function removeGoal(button) {
            const goalSection = button.closest('.goal-section');
            goalSection.remove();
            updateGoalNumbers();
        }

        function updateGoalNumbers() {
            const goalSections = document.querySelectorAll('.goal-section');
            goalSections.forEach((section, index) => {
                section.querySelector('.goal-header').textContent = `Goal ${index + 1}`;
            });
            goalCount = goalSections.length;
        }
    </script>
</body>
</html> 
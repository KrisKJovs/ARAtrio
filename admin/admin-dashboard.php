<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Special Needs Reporting System</title>

    <link rel="stylesheet" href="css/admin-dashboard.css">
</head>
<body>
    <div class="header">
        <h2>Admin Dashboard</h2>
        <div class="user-info">
            <span id="userEmail"></span>
            <button class="logout-btn" onclick="logout()">Logout</button>
        </div>
    </div>

    <div class="dashboard-container">
        <div class="button-grid">
            <button class="dashboard-button" onclick="navigateTo('students-enrolled')">
                <i class="fas fa-user-graduate"></i>
                Students Enrolled
                <div class="button-description">
                    View and manage enrolled students information
                </div>
            </button>
            <button class="dashboard-button" onclick="navigateTo('students-assessment')">
                <i class="fas fa-clipboard-check"></i>
                Students for Assessment
                <div class="button-description">
                    Generate LD-001 SPED assessments and create shareable links
                </div>
            </button>
            <button class="dashboard-button" onclick="navigateTo('students-assessed')">
                <i class="fas fa-tasks"></i>
                Students Assessed
                <div class="button-description">
                    View completed student assessments
                </div>
            </button>
            <button class="dashboard-button" onclick="navigateTo('weekly-progress')">
                <i class="fas fa-chart-line"></i>
                Students Weekly Progress Report
                <div class="button-description">
                    Generate, download, and share LD-R001 weekly progress reports based on IEP
                </div>
            </button>
            <button class="dashboard-button" onclick="navigateTo('iep-generation')">
                <i class="fas fa-file-alt"></i>
                IEP Generation
                <div class="button-description">
                    Generate and manage Individual Education Plans (IEP)
                </div>
            </button>
        </div>
    </div>

    <script>
        // Check if user is logged in and is an admin
        window.onload = function() {
            const userStatus = sessionStorage.getItem('userStatus');
            const userEmail = sessionStorage.getItem('userEmail');
            
            if (!userStatus || userStatus !== 'Admin') {
                window.location.href = 'login.php';
                return;
            }
            
            document.getElementById('userEmail').textContent = userEmail;
        };

        function logout() {
            sessionStorage.clear();
            window.location.href = 'login.php';
        }

        function navigateTo(page) {
            switch(page) {
                case 'students-enrolled':
                    window.location.href = 'students-enrolled.html';
                    break;
                case 'students-assessment':
                    window.location.href = 'assessment-generator.html';
                    break;
                case 'students-assessed':
                    window.location.href = 'assessed-students.html';
                    break;
                case 'weekly-progress':
                    window.location.href = 'weekly-progress.html?action=list';
                    break;
                case 'iep-generation':
                    window.location.href = 'iep-generation.html';
                    break;
            }
        }

        // Add new function to handle progress report actions
        function handleProgressReport(action, studentId) {
            switch(action) {
                case 'generate':
                    window.location.href = `weekly-progress.html?action=generate&studentId=${studentId}`;
                    break;
                case 'download':
                    window.location.href = `weekly-progress.html?action=download&studentId=${studentId}`;
                    break;
                case 'share':
                    window.location.href = `weekly-progress.html?action=share&studentId=${studentId}`;
                    break;
            }
        }
    </script>
</body>
</html> 
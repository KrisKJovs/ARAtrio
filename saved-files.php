<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Files</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* ... (same base styles as parent-homepage.html) ... */
        .reports-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
        }
        .report-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        .report-item:hover {
            background: #f7fafc;
        }
        .report-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .report-icon {
            font-size: 24px;
            color: #667eea;
        }
        .report-details h3 {
            margin: 0;
            color: #2d3748;
        }
        .report-details p {
            margin: 5px 0 0;
            color: #718096;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .action-btn {
            padding: 8px 15px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .view-btn {
            background: #667eea;
            color: white;
        }
        .delete-btn {
            background: #fc8181;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Saved Files</h1>
            <button class="logout-btn" onclick="logout()">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </div>

        <button class="action-btn" onclick="window.location.href='parent-homepage.html'">
            <i class="fas fa-arrow-left"></i> Back to Homepage
        </button>

        <div class="reports-container" id="reportsContainer">
            <!-- Reports will be loaded here dynamically -->
        </div>
    </div>

    <script>
        window.onload = async function() {
            const userStatus = sessionStorage.getItem('userStatus');
            if (!userStatus || userStatus !== 'Parent') {
                window.location.href = 'login.html';
                return;
            }
            
            await loadSavedReports();
        }

        async function loadSavedReports() {
            try {
                const response = await fetch('get_reports.php');
                const reports = await response.json();
                
                const container = document.getElementById('reportsContainer');
                container.innerHTML = ''; // Clear existing content

                reports.forEach(report => {
                    const reportElement = createReportElement(report);
                    container.appendChild(reportElement);
                });
            } catch (error) {
                console.error('Error loading reports:', error);
                alert('Error loading saved reports');
            }
        }

        function createReportElement(report) {
            const div = document.createElement('div');
            div.className = 'report-item';
            div.innerHTML = `
                <div class="report-info">
                    <i class="fas fa-file-alt report-icon"></i>
                    <div class="report-details">
                        <h3>${report.childName}</h3>
                        <p>Submitted on: ${new Date(report.submissionDate).toLocaleDateString()}</p>
                    </div>
                </div>
                <div class="action-buttons">
                    <button class="action-btn view-btn" onclick="viewReport(${report.id})">
                        <i class="fas fa-eye"></i> View
                    </button>
                    <button class="action-btn delete-btn" onclick="deleteReport(${report.id})">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </div>
            `;
            return div;
        }

        async function viewReport(reportId) {
            try {
                const response = await fetch(`get_report.php?id=${reportId}`);
                const report = await response.json();
                
                // Store report data and redirect to view page
                sessionStorage.setItem('viewReport', JSON.stringify(report));
                window.location.href = 'view-report.html';
            } catch (error) {
                console.error('Error viewing report:', error);
                alert('Error loading report details');
            }
        }

        async function deleteReport(reportId) {
            if (!confirm('Are you sure you want to delete this report?')) {
                return;
            }

            try {
                const response = await fetch('delete_report.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ id: reportId })
                });
                
                const result = await response.json();
                if (result.success) {
                    await loadSavedReports(); // Reload the list
                } else {
                    alert('Error deleting report');
                }
            } catch (error) {
                console.error('Error deleting report:', error);
                alert('Error deleting report');
            }
        }

        function logout() {
            sessionStorage.clear();
            window.location.href = 'login.html';
        }
    </script>
</body>
</html> 
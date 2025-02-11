<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Submitted</title>
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
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .success-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .success-icon {
            font-size: 48px;
            color: #48bb78;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f7fafc;
            border-radius: 10px;
        }
        .section-title {
            color: #4a5568;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e2e8f0;
        }
        .field {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #2d3748;
        }
        .value {
            color: #4a5568;
        }
        .buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }
        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background-color: #667eea;
            color: white;
        }
        .btn-secondary {
            background-color: #e2e8f0;
            color: #4a5568;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-header">
            <i class="fas fa-check-circle success-icon"></i>
            <h1>Assessment Submitted Successfully</h1>
            <p>Thank you for completing the assessment. Here's a summary of the information you provided:</p>
        </div>
        <div id="formSummary">
            <!-- Data will be populated here by JavaScript -->
        </div>
        <div class="buttons">
            <button class="btn btn-primary" onclick="window.print()">
                <i class="fas fa-print"></i> Print Summary
            </button>
            <button class="btn btn-secondary" onclick="window.location.href='parent-homepage.html'">
                <i class="fas fa-home"></i> Go to Homepage
            </button>
        </div>
    </div>

    <script>
        window.onload = function() {
            // Get form data from sessionStorage
            const formData = JSON.parse(sessionStorage.getItem('formData'));
            if (!formData) {
                window.location.href = 'parent-dashboard.html';
                return;
            }

            const formSummary = document.getElementById('formSummary');
            
            // Create sections and populate with data
            const sections = {
                'Background Information': ['childName', 'dob', 'gradeLevel', 'gender', 'parentName', 'phone', 'email', 'primaryLanguage'],
                'Medical Information': ['medicalConditions'],
                'Areas of Concern': ['areasOfConcern'],
                'Parent Input': ['primaryConcerns', 'childGoals', 'successfulStrategies']
                // Add more sections as needed
            };

            for (const [sectionTitle, fields] of Object.entries(sections)) {
                const section = document.createElement('div');
                section.className = 'section';
                
                const title = document.createElement('h2');
                title.className = 'section-title';
                title.textContent = sectionTitle;
                section.appendChild(title);

                fields.forEach(field => {
                    if (formData[field]) {
                        const fieldDiv = document.createElement('div');
                        fieldDiv.className = 'field';
                        
                        const label = document.createElement('span');
                        label.className = 'label';
                        label.textContent = field.replace(/([A-Z])/g, ' $1').toLowerCase() + ': ';
                        
                        const value = document.createElement('span');
                        value.className = 'value';
                        value.textContent = typeof formData[field] === 'object' 
                            ? JSON.stringify(formData[field]) 
                            : formData[field];
                        
                        fieldDiv.appendChild(label);
                        fieldDiv.appendChild(value);
                        section.appendChild(fieldDiv);
                    }
                });

                formSummary.appendChild(section);
            }
        };
    </script>
</body>
</html> 
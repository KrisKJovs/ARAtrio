<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Input Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .dashboard-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: -30px -30px 30px -30px;
            padding: 25px 30px;
            border-radius: 15px 15px 0 0;
            color: white;
        }
        .header h2 {
            margin: 0;
            font-weight: 500;
        }
        .logout-btn {
            background-color: rgba(255,255,255,0.2);
            color: white;
            padding: 10px 20px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .logout-btn:hover {
            background-color: rgba(255,255,255,0.3);
            transform: translateY(-2px);
        }
        .form-section {
            background-color: white;
            margin-bottom: 30px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .form-section:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        .form-section h3 {
            color: #2d3748;
            font-size: 1.4rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .form-section h3 i {
            color: #667eea;
            font-size: 1.3em;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-group label {
            display: block;
            color: #4a5568;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .checkbox-wrapper {
            background-color: #f7fafc;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 8px;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }
        .checkbox-wrapper:hover {
            background-color: #edf2f7;
            transform: translateX(5px);
        }
        .checkbox-wrapper input[type="checkbox"],
        .checkbox-wrapper input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: #667eea;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #fff;
        }
        input[type="text"]:focus,
        textarea:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102,126,234,0.2);
            outline: none;
        }
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        .sub-item {
            margin-left: 20px;
            padding-left: 15px;
            border-left: 2px solid #e2e8f0;
        }
        .helper-text {
            font-size: 0.9rem;
            color: #718096;
            margin-top: 5px;
            margin-left: 15px;
        }
        .completion-indicator {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #48bb78;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .form-section.completed .completion-indicator {
            opacity: 1;
        }
        .tooltip {
            position: relative;
            display: inline-block;
            margin-left: 8px;
            color: #a0aec0;
        }
        .tooltip .tooltip-text {
            visibility: hidden;
            width: 200px;
            background-color: #2d3748;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 8px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
        }
        .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }
        .section-progress {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .progress-step {
            flex: 1;
            text-align: center;
            position: relative;
        }
        .progress-step::after {
            content: '';
            height: 3px;
            width: 100%;
            background-color: #e2e8f0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
        }
        .progress-step.active::after {
            background-color: #667eea;
        }
        /* Additional styles for Section C */
        .input-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .input-card:hover {
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transform: translateY(-2px);
        }

        .input-card label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #4a5568;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .input-card label i {
            color: #667eea;
        }

        .input-card textarea {
            background: #fff;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 15px;
            min-height: 120px;
            width: calc(100% - 34px);
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .input-card textarea:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102,126,234,0.2);
        }

        .character-count {
            font-size: 0.8rem;
            color: #718096;
            text-align: right;
            margin-top: 8px;
        }

        .suggestion-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }

        .suggestion-chip {
            background: #edf2f7;
            padding: 6px 12px;
            border-radius: 16px;
            font-size: 0.9rem;
            color: #4a5568;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
        }

        .suggestion-chip:hover {
            background: #667eea;
            color: white;
        }

        /* Other input styles */
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: calc(100% - 34px);
            box-sizing: border-box;
        }

        /* Textarea specific fixes */
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #fff;
            box-sizing: border-box;
            min-height: 120px;
            resize: vertical;
            max-width: calc(100% - 2px); /* Account for borders */
        }

        /* Input card textarea specific */
        .input-card textarea {
            width: 100%;
            min-height: 120px;
            resize: vertical;
            max-width: calc(100% - 2px);
            margin: 0;
            display: block;
        }

        /* Container adjustments */
        .form-group, 
        .input-card {
            width: 100%;
            padding: 20px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .radio-group-container {
            margin: 20px 0;
        }

        .radio-options {
            display: flex;
            gap: 30px;
            margin-top: 8px;
        }

        .radio-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #4a5568;
            cursor: pointer;
        }

        .radio-label input[type="radio"] {
            width: 16px;
            height: 16px;
            margin: 0;
            cursor: pointer;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            margin-top: 8px;
            font-size: 1rem;
        }

        label {
            color: #4a5568;
            font-weight: 500;
        }

        .checkbox-group.vertical {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            background-color: #f7fafc;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .checkbox-wrapper:hover {
            background-color: #edf2f7;
            transform: translateX(5px);
        }

        .checkbox-wrapper input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #667eea;
            cursor: pointer;
        }

        .checkbox-wrapper label {
            color: #4a5568;
            font-size: 1rem;
            cursor: pointer;
        }

        .form-section {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            margin-top: 8px;
            font-size: 1rem;
        }

        /* Removed border-left from form-section */
        .dashboard-header {
            background: linear-gradient(to right, #6c63ff, #8e6cff);
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .dashboard-header h1 {
            color: white;
            margin: 0;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .logout-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 8px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .form-container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .dashboard-header {
            background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);
            padding: 24px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 20px 20px 0 0;
            position: relative;
            transition: all 0.3s ease;
        }

        .dashboard-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, 
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.2) 50%,
                rgba(255,255,255,0) 100%);
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dashboard-icon {
            font-size: 24px;
            color: rgba(255,255,255,0.9);
        }

        .dashboard-header h1 {
            color: white;
            margin: 0;
            font-size: 1.8rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-size: 0.9rem;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
        }

        .logout-btn {
            background: rgba(255,255,255,0.15);
            color: white;
            border: 1px solid rgba(255,255,255,0.2);
            padding: 8px 24px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .logout-btn:active {
            transform: translateY(0);
        }

        .logout-btn i {
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .user-info span {
                display: none;
            }
            
            .dashboard-header {
                padding: 20px;
            }
            
            .logout-btn {
                padding: 8px 16px;
            }
        }

        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            margin: 40px auto;
            box-shadow: 0 4px 15px rgba(102,126,234,0.2);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102,126,234,0.3);
        }

        .submit-btn:active {
            transform: translateY(1px);
        }

        /* Add loading state styles */
        .submit-btn.loading {
            position: relative;
            color: transparent;
        }

        .submit-btn.loading::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            width: 20px;
            height: 20px;
            border: 2px solid white;
            border-radius: 50%;
            border-top-color: transparent;
            transform: translate(-50%, -50%);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .form-section h4 {
            color: #4a5568;
            font-size: 1.1rem;
            margin: 25px 0 15px 0;
            padding-bottom: 8px;
            border-bottom: 2px solid #e2e8f0;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <script>
        window.onload = function() {
            const userStatus = sessionStorage.getItem('userStatus');
            const userEmail = sessionStorage.getItem('userEmail');
            
            if (!userStatus || userStatus !== 'Parent') {
                window.location.href = 'login.html';
            }

            // Add event listener to logout button
            const logoutBtn = document.querySelector('.logout-btn');
            if (logoutBtn) {
                logoutBtn.addEventListener('click', logout);
            }
        }

        function logout() {
            sessionStorage.clear();
            window.location.href = 'login.html';
        }

        function generateRandomFileName() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            for (let i = 0; i < 10; i++) {
                result += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return result + '.html';
        }

        async function handleFormSubmission(e) {
            e.preventDefault();
            
            // Show loading state on button
            const submitBtn = document.querySelector('.submit-btn');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting...';
            
            const form = document.getElementById('assessmentForm');
            const formData = new FormData(form);
            const data = {};
            
            // Convert FormData to object
            for (let [key, value] of formData.entries()) {
                data[key] = value;
            }

            // Add medical conditions
            data.medicalConditions = {
                autism: document.getElementById('autism').checked,
                speech: document.getElementById('speech').checked,
                adhd: document.getElementById('adhd').checked,
                learning: document.getElementById('learning').checked,
                developmental: document.getElementById('developmental').checked,
                other: document.getElementById('other').checked
            };

            // Add areas of concern
            data.areasOfConcern = {
                communication: document.querySelector('input[name="communication"]').checked,
                cognitive: document.querySelector('input[name="cognitive"]').checked,
                motor: document.querySelector('input[name="motor"]').checked,
                behavioral: document.querySelector('input[name="behavioral"]').checked,
                sensory: document.querySelector('input[name="sensory"]').checked,
                adaptive: document.querySelector('input[name="adaptive"]').checked
            };

            try {
                // Store form data in sessionStorage
                sessionStorage.setItem('formData', JSON.stringify(data));
                
                // Save to database
                const saveResponse = await fetch('save_assessment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                });
                
                const saveResult = await saveResponse.json();
                if (saveResult.success) {
                    // Changed redirect to parent-submitted.html
                    window.location.href = 'parent-submitted.html';
                } else {
                    throw new Error(saveResult.error || 'Failed to save assessment');
                }
                
            } catch (error) {
                console.error('Error:', error);
                alert('Error submitting assessment. Please try again.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit Assessment';
            }
        }

        // Add event listener to form
        document.getElementById('assessmentForm').addEventListener('submit', handleFormSubmission);

        // Update progress bar as user fills form
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, select, textarea');
        const progressBar = document.getElementById('formProgress');

        function updateProgress() {
            const total = inputs.length;
            const filled = Array.from(inputs).filter(input => {
                if (input.type === 'radio' || input.type === 'checkbox') {
                    return input.checked;
                }
                return input.value.trim() !== '';
            }).length;
            
            const progress = (filled / total) * 100;
            progressBar.style.width = `${progress}%`;
        }

        inputs.forEach(input => {
            input.addEventListener('change', updateProgress);
            input.addEventListener('input', updateProgress);
        });

        function generateReport(formData) {
            const fileName = generateRandomFileName();
            let reportContent = `
                <!DOCTYPE html>
                <html>
                <head>
                    <title>Child Assessment Report</title>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
                        .section { margin-bottom: 20px; }
                        .section-title { color: #667eea; border-bottom: 2px solid #667eea; padding-bottom: 5px; }
                        .field { margin: 10px 0; }
                        .label { font-weight: bold; }
                    </style>
                </head>
                <body>
                    <h1>Child Assessment Report</h1>
                    <div class="section">
            `;

            // Convert form data to HTML
            for (let [key, value] of formData.entries()) {
                if (value) {  // Only include fields that have values
                    reportContent += `
                        <div class="field">
                            <span class="label">${key}:</span>
                            <span class="value">${value}</span>
                        </div>`;
                }
            }

            reportContent += `
                    </div>
                    <footer>
                        <p>Generated on: ${new Date().toLocaleString()}</p>
                    </footer>
                </body>
                </html>`;

            // Create and download the file
            const blob = new Blob([reportContent], { type: 'text/html' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = fileName;
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
            document.body.removeChild(a);
        }

        function checkSectionCompletion(section) {
            const inputs = section.querySelectorAll('input, select, textarea');
            const required = section.querySelectorAll('[required]');
            let isComplete = true;

            required.forEach(input => {
                if (!input.value) isComplete = false;
            });

            if (isComplete) {
                section.classList.add('completed');
            } else {
                section.classList.remove('completed');
            }
        }

        // Add completion check to each form section
        document.querySelectorAll('.form-section').forEach(section => {
            // Add completion indicator
            const indicator = document.createElement('i');
            indicator.className = 'fas fa-check-circle completion-indicator';
            section.appendChild(indicator);

            // Monitor inputs in section
            const inputs = section.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('change', () => checkSectionCompletion(section));
                input.addEventListener('input', () => checkSectionCompletion(section));
            });
        });

        // Character counter functionality
        document.querySelectorAll('textarea').forEach(textarea => {
            const counter = textarea.parentElement.querySelector('.character-count');
            
            textarea.addEventListener('input', () => {
                const remaining = textarea.maxLength - textarea.value.length;
                counter.textContent = `${textarea.value.length}/${textarea.maxLength} characters`;
            });
        });

        // Suggestion chips functionality
        document.querySelectorAll('.suggestion-chip').forEach(chip => {
            chip.addEventListener('click', () => {
                const textarea = chip.closest('.input-card').querySelector('textarea');
                const chipText = chip.textContent;
                
                if (textarea.value) {
                    textarea.value += ', ' + chipText.toLowerCase();
                } else {
                    textarea.value = chipText.toLowerCase();
                }
                
                // Trigger character counter update
                textarea.dispatchEvent(new Event('input'));
            });
        });
    </script>

    <div class="page-container">
        <div class="dashboard-header">
            <div class="header-left">
                <i class="fas fa-columns dashboard-icon"></i>
                <h1>Parent Dashboard</h1>
            </div>
            
            <div class="header-right">
                <div class="user-info">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <span>Welcome, Parent</span>
                </div>
                
                <button class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </div>
        </div>

        <div class="form-container">
            <div class="progress-bar">
                <div class="progress" id="formProgress"></div>
            </div>
            
            <form id="assessmentForm" onsubmit="handleFormSubmission(event)">
                <!-- Section A -->
                <div class="form-section">
                    <h3><i class="fas fa-user"></i> Section A: Background Information</h3>
                    <div class="form-group">
                        <label>Child's Name:</label>
                        <input type="text" name="childName" required>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="date" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label>IEP Start Date:</label>
                        <input type="date" name="iepStartDate">
                    </div>
                    <div class="form-group">
                        <label>Grade/Level:</label>
                        <input type="text" name="gradeLevel">
                    </div>
                    <div class="form-group">
                        <label>Gender:</label>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                    </div>
                    <div class="form-group">
                        <label>Parent/Guardian's Name:</label>
                        <input type="text" name="parentName">
                    </div>
                    <div class="form-group">
                        <label>Contact Information:</label>
                        <div class="sub-item">
                            <label>Phone:</label>
                            <input type="text" name="phone">
                        </div>
                        <div class="sub-item">
                            <label>Email:</label>
                            <input type="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Primary Language:</label>
                        <input type="text" name="primaryLanguage">
                    </div>
                </div>

                <!-- Medical Alerts Section -->
                <div class="form-section">
                    <h3><i class="fas fa-notes-medical"></i> Medical Alerts/Medications</h3>
                    <div class="form-group">
                        <label>Eligibility Criteria:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="autism" id="autism">
                                <label for="autism">Autism Spectrum Disorder</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="speech" id="speech">
                                <label for="speech">Speech/Language Impairment</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="adhd" id="adhd">
                                <label for="adhd">ADHD/ADD</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="learning" id="learning">
                                <label for="learning">Learning Disability</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="developmental" id="developmental">
                                <label for="developmental">Developmental Delay</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="other" id="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section B -->
                <div class="form-section">
                    <h3><i class="fas fa-child"></i> Section B: Developmental History and Assessment Summary</h3>
                    
                    <!-- Developmental Milestones subsection -->
                    <div class="form-group">
                        <h4>Developmental Milestones:</h4>
                        <div class="sub-item">
                            <label>Sat at age:</label>
                            <input type="text" name="satAge">
                        </div>
                        <div class="sub-item">
                            <label>Crawled at age:</label>
                            <input type="text" name="crawlAge">
                        </div>
                        <div class="sub-item">
                            <label>Walked at age:</label>
                            <input type="text" name="walkAge">
                        </div>
                        <div class="sub-item">
                            <label>First words at age:</label>
                            <input type="text" name="firstWordsAge">
                        </div>
                        <div class="sub-item">
                            <label>Formed sentences at age:</label>
                            <input type="text" name="sentencesAge">
                        </div>
                    </div>

                    <!-- Previous Schools/Services subsection -->
                    <div class="form-group">
                        <h4>Previous Schools/Services:</h4>
                        <label>Previous school:</label>
                        <input type="text" class="input-field" name="previousSchool">
                        
                        <div class="radio-group-container">
                            <label>Special education services received:</label>
                            <div class="radio-options">
                                <label class="radio-label">
                                    <input type="radio" name="specialEdServices" value="Yes">
                                    Yes
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="specialEdServices" value="No">
                                    No
                                </label>
                            </div>
                        </div>

                        <div class="radio-group-container">
                            <label>Individualized Education Plan (IEP):</label>
                            <div class="radio-options">
                                <label class="radio-label">
                                    <input type="radio" name="iepStatus" value="Yes">
                                    Yes
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="iepStatus" value="No">
                                    No
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Other Services:</label>
                            <input type="text" class="input-field" name="otherServices" placeholder="Please specify any other services received">
                        </div>
                    </div>

                    <!-- Areas of Concern subsection -->
                    <div class="form-group">
                        <h4>Areas of Concern:</h4>
                        <div class="checkbox-group vertical">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="communication" id="communication">
                                <label for="communication">Communication</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="cognitive" id="cognitive">
                                <label for="cognitive">Cognitive Development</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="motor" id="motor">
                                <label for="motor">Motor Skills</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="behavioral" id="behavioral">
                                <label for="behavioral">Behavioral Skills</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="sensory" id="sensory">
                                <label for="sensory">Sensory Processing</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="checkbox" name="adaptive" id="adaptive">
                                <label for="adaptive">Adaptive Skills</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section C -->
                <div class="form-section">
                    <h3>
                        <i class="fas fa-comments-alt"></i> 
                        Section C: Parent/Guardian Input
                        <div class="tooltip">
                            <i class="fas fa-info-circle"></i>
                            <span class="tooltip-text">Share your insights about your child's needs and goals</span>
                        </div>
                    </h3>
                    
                    <div class="input-card">
                        <label>
                            <i class="fas fa-exclamation-circle"></i>
                            Primary Concerns
                        </label>
                        <p class="helper-text">What are your main concerns regarding your child's development?</p>
                        <textarea 
                            name="primaryConcerns" 
                            placeholder="Example: I'm concerned about my child's difficulty with..."
                            maxlength="500"
                        ></textarea>
                        <div class="character-count">0/500 characters</div>
                        <div class="suggestion-chips">
                            <button class="suggestion-chip">Communication skills</button>
                            <button class="suggestion-chip">Social interaction</button>
                            <button class="suggestion-chip">Academic performance</button>
                            <button class="suggestion-chip">Behavioral challenges</button>
                        </div>
                    </div>

                    <div class="input-card">
                        <label>
                            <i class="fas fa-star"></i>
                            Goals for Your Child
                        </label>
                        <p class="helper-text">What specific goals would you like to see your child achieve?</p>
                        <textarea 
                            name="childGoals" 
                            placeholder="Example: I would like my child to improve..."
                            maxlength="500"
                        ></textarea>
                        <div class="character-count">0/500 characters</div>
                        <div class="suggestion-chips">
                            <button class="suggestion-chip">Independent skills</button>
                            <button class="suggestion-chip">Social relationships</button>
                            <button class="suggestion-chip">Learning objectives</button>
                            <button class="suggestion-chip">Self-expression</button>
                        </div>
                    </div>

                    <div class="input-card">
                        <label>
                            <i class="fas fa-lightbulb"></i>
                            Strategies/Approaches That Have Worked
                        </label>
                        <p class="helper-text">Share successful strategies you've used with your child</p>
                        <textarea 
                            name="successfulStrategies" 
                            placeholder="Example: We've found success with..."
                            maxlength="500"
                        ></textarea>
                        <div class="character-count">0/500 characters</div>
                        <div class="suggestion-chips">
                            <button class="suggestion-chip">Visual schedules</button>
                            <button class="suggestion-chip">Reward systems</button>
                            <button class="suggestion-chip">Break times</button>
                            <button class="suggestion-chip">Sensory tools</button>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3><i class="fas fa-brain"></i> Section D: Behavioral Information</h3>
                    
                    <div class="form-group">
                        <label>My child has difficulty with:</label>
                        <p class="helper-text">Select all that apply to your child's typical behavior</p>
                        
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="transitions" id="transitions">
                            <label for="transitions">Transitions</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="focusing" id="focusing">
                            <label for="focusing">Focusing</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="peerInteractions" id="peerInteractions">
                            <label for="peerInteractions">Peer interactions</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Calming strategies that work best include:</label>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="deepBreathing" id="deepBreathing">
                            <label for="deepBreathing">Deep breathing</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="sensoryTools" id="sensoryTools">
                            <label for="sensoryTools">Sensory tools (e.g., fidget toys)</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="quietTime" id="quietTime">
                            <label for="quietTime">Quiet time</label>
                        </div>
                        <div class="form-group">
                            <label>Other:</label>
                            <input type="text" name="otherCalmingStrategies">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3><i class="fas fa-comments"></i> Communication and Social Skills</h3>
                    
                    <div class="form-group">
                        <label>My child primarily communicates through:</label>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="verbalComm" id="verbalComm">
                            <label for="verbalComm">Verbal communication</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="nonVerbalGestures" id="nonVerbalGestures">
                            <label for="nonVerbalGestures">Non-verbal gestures</label>
                        </div>
                        <div class="form-group">
                            <label>Other methods:</label>
                            <input type="text" name="otherCommunicationMethods">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>How does your child interact with peers or adults?</label>
                        <label>My child feels more comfortable in:</label>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="structuredEnv" id="structuredEnv">
                            <label for="structuredEnv">Structured environments</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="unstructuredEnv" id="unstructuredEnv">
                            <label for="unstructuredEnv">Unstructured environments</label>
                        </div>
                        <div class="form-group">
                            <label>Other:</label>
                            <input type="text" name="otherEnvironments">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3><i class="fas fa-hand-sparkles"></i> Sensory and Physical Needs</h3>
                    
                    <div class="form-group">
                        <label>My child has sensory sensitivities to:</label>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="noise" id="noise">
                            <label for="noise">Noise</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="light" id="light">
                            <label for="light">Light</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="textures" id="textures">
                            <label for="textures">Textures</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="otherSensitivity" id="otherSensitivity">
                            <label for="otherSensitivity">Other:</label>
                            <input type="text" name="otherSensitivityDetails">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>My child requires physical accommodations:</label>
                        <div class="checkbox-wrapper">
                            <input type="radio" name="physicalAccom" value="yes" id="physicalAccomYes">
                            <label for="physicalAccomYes">Yes (please specify):</label>
                            <input type="text" name="physicalAccomDetails">
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="radio" name="physicalAccom" value="no" id="physicalAccomNo">
                            <label for="physicalAccomNo">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3><i class="fas fa-bullseye"></i> Goals and Expectations</h3>
                    
                    <div class="form-group">
                        <label>Goals for my child this year include:</label>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="academicImprovement" id="academicImprovement">
                            <label for="academicImprovement">Academic improvement</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="socialDevelopment" id="socialDevelopment">
                            <label for="socialDevelopment">Social development</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="emotionalGrowth" id="emotionalGrowth">
                            <label for="emotionalGrowth">Emotional growth</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="otherGoal" id="otherGoal">
                            <label for="otherGoal">Other:</label>
                            <input type="text" name="otherGoalDetails">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>What specific goals or skills would you like your child to develop in the next 3-5 years?</label>
                        <textarea name="longTermGoals"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3><i class="fas fa-home"></i> Home Environment and Support</h3>
                    
                    <div class="form-group">
                        <label>Strategies or routines that work well at home include:</label>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="clearSchedules" id="clearSchedules">
                            <label for="clearSchedules">Clear schedules</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="rewardSystems" id="rewardSystems">
                            <label for="rewardSystems">Reward systems</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="visualAids" id="visualAids">
                            <label for="visualAids">Visual aids</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input type="checkbox" name="otherStrategy" id="otherStrategy">
                            <label for="otherStrategy">Other:</label>   
                            <input type="text" name="otherStrategyDetails">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>What additional support or resources would help you at home?</label>
                        <textarea name="additionalSupport"></textarea>
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    Submit Assessment
                </button>
            </form>
        </div>
    </div>
</body>
</html>     
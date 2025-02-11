<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specialist Assessment - Ara</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f5f5f5;
        }

        .assessment-form {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #2c3e50;
        }

        .section {
            margin-bottom: 30px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .section h2 {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #1a2634;
            border-bottom: 2px solid #6B48FF;
            padding-bottom: 10px;
        }

        .input-group {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .input-field {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .input-field label {
            color: #6B48FF;
            display: flex;
            align-items: center;
        }

        .input-field input {
            flex: 1;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .input-field input::placeholder {
            color: #666;
            opacity: 1;
        }

        .input-field input:not(:placeholder-shown) {
            padding-left: 35px;
        }

        .checkbox-item:hover {
            background: #f8f9fa;
            border-radius: 4px;
            padding: 5px;
        }

        .progress-bar {
            width: 100%;
            height: 4px;
            background: #eee;
            margin-bottom: 20px;
            border-radius: 2px;
        }

        .progress {
            width: 0%;
            height: 100%;
            background: #6B48FF;
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #1a2634;
            color: white;
        }

        .checkbox-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        textarea {
            width: 100%;
            min-height: 100px;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .submit-btn {
            background: #6B48FF;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background: #5a3dd8;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .gender-options {
            display: flex;
            gap: 20px;
        }

        .gender-option {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .gender-option input[type="radio"] {
            margin: 0;
            cursor: pointer;
        }

        .gender-option span {
            color: #333;
        }

        .gender-option:hover span {
            color: #6B48FF;
        }

        /* Header Styles */
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #6B48FF;
            height: 60px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
            color: white;
        }

        .specialist-email {
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
        }

        .logout-btn {
            background: white;
            color: #333;
            border: none;
            padding: 5px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.2s;
        }

        .logout-btn:hover {
            background-color: #f0f0f0;
        }

        /* Adjust main content spacing */
        .main-content {
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header class="main-header">
        <div class="logo-container">
            <a href="specialist-dashboard.html">
                <img src="./images/AraLogo.png" alt="Ara Logo">
            </a>
        </div>  
        <div class="header-right">
            <div class="specialist-email">
                <i class="fas fa-user"></i>
                specialist@gg.com
            </div>
            <button class="logout-btn" onclick="window.location.href='login.html'">
                Logout
            </button>
        </div>
    </header>

    <main class="main-content">
        <div class="assessment-form">
            <div class="progress-bar">
                <div class="progress" id="progressBar"></div>
            </div>

            <h1><i class="fas fa-clipboard-check"></i> Specialist Assessment Form</h1>

            <div class="section">
                <h2><i class="fas fa-user"></i> 1. General Information</h2>
                <div class="input-group">
                    <div class="input-field">
                        <label><i class="fas fa-child"></i></label>
                        <input type="text" id="childName" name="childName" placeholder="Child's Full Name">
                    </div>
                    <div class="input-field">
                        <label><i class="fas fa-venus-mars"></i></label>
                        <div class="gender-options">
                            <label class="gender-option">
                                <input type="radio" name="gender" value="male">
                                <span>Male</span>
                            </label>
                            <label class="gender-option">
                                <input type="radio" name="gender" value="female">
                                <span>Female</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2><i class="fas fa-chart-line"></i> 2. Areas of Concern</h2>
                
                <h3>Academic Skills:</h3>
                <table>
                    <tr>
                        <th>Skill</th>
                        <th>Poor</th>
                        <th>Fair</th>
                        <th>Good</th>
                        <th>Excellent</th>
                    </tr>
                    <tr>
                        <td>Reading</td>
                        <td><input type="radio" name="reading" value="poor"></td>
                        <td><input type="radio" name="reading" value="fair"></td>
                        <td><input type="radio" name="reading" value="good"></td>
                        <td><input type="radio" name="reading" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>Writing</td>
                        <td><input type="radio" name="writing" value="poor"></td>
                        <td><input type="radio" name="writing" value="fair"></td>
                        <td><input type="radio" name="writing" value="good"></td>
                        <td><input type="radio" name="writing" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>Mathematics</td>
                        <td><input type="radio" name="mathematics" value="poor"></td>
                        <td><input type="radio" name="mathematics" value="fair"></td>
                        <td><input type="radio" name="mathematics" value="good"></td>
                        <td><input type="radio" name="mathematics" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>OTHER:</td>
                        <td colspan="4"><input type="text" style="width: 95%; height: 200%;"></td>
                    </tr>
                </table>

                <h3>Communication Skills:</h3>
                <table>
                    <tr>
                        <th>Skill</th>
                        <th>Poor</th>
                        <th>Fair</th>
                        <th>Good</th>
                        <th>Excellent</th>
                    </tr>
                    <tr>
                        <td>Expressive Language</td>
                        <td><input type="radio" name="expressive" value="poor"></td>
                        <td><input type="radio" name="expressive" value="fair"></td>
                        <td><input type="radio" name="expressive" value="good"></td>
                        <td><input type="radio" name="expressive" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>Receptive Language</td>
                        <td><input type="radio" name="receptive" value="poor"></td>
                        <td><input type="radio" name="receptive" value="fair"></td>
                        <td><input type="radio" name="receptive" value="good"></td>
                        <td><input type="radio" name="receptive" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>Social Communication</td>
                        <td><input type="radio" name="social" value="poor"></td>
                        <td><input type="radio" name="social" value="fair"></td>
                        <td><input type="radio" name="social" value="good"></td>
                        <td><input type="radio" name="social" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>OTHER:</td>
                        <td colspan="4"><input type="text" style="width: 95%; height: 200%;"></td>
                    </tr>
                </table>

                <h3>Motor Skills:</h3>
                <table>
                    <tr>
                        <th>Skill</th>
                        <th>Poor</th>
                        <th>Fair</th>
                        <th>Good</th>
                        <th>Excellent</th>
                    </tr>
                    <tr>
                        <td>Fine Motor</td>
                        <td><input type="radio" name="fine" value="poor"></td>
                        <td><input type="radio" name="fine" value="fair"></td>
                        <td><input type="radio" name="fine" value="good"></td>
                        <td><input type="radio" name="fine" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>Gross Motor</td>
                        <td><input type="radio" name="gross" value="poor"></td>
                        <td><input type="radio" name="gross" value="fair"></td>
                        <td><input type="radio" name="gross" value="good"></td>
                        <td><input type="radio" name="gross" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>OTHER:</td>
                        <td colspan="4"><input type="text" style="width: 95%; height: 200%;"></td>
                    </tr>
                </table>

                <h3>Behavioral and Emotional Skills:</h3>
                <table>
                    <tr>
                        <th>Skill</th>
                        <th>Poor</th>
                        <th>Fair</th>
                        <th>Good</th>
                        <th>Excellent</th>
                    </tr>
                    <tr>
                        <td>Attention</td>
                        <td><input type="radio" name="attention" value="poor"></td>
                        <td><input type="radio" name="attention" value="fair"></td>
                        <td><input type="radio" name="attention" value="good"></td>
                        <td><input type="radio" name="attention" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>Impulse Control</td>
                        <td><input type="radio" name="impulse" value="poor"></td>
                        <td><input type="radio" name="impulse" value="fair"></td>
                        <td><input type="radio" name="impulse" value="good"></td>
                        <td><input type="radio" name="impulse" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>Social Interaction</td>
                        <td><input type="radio" name="interaction" value="poor"></td>
                        <td><input type="radio" name="interaction" value="fair"></td>
                        <td><input type="radio" name="interaction" value="good"></td>
                        <td><input type="radio" name="interaction" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>Emotional Regulation</td>
                        <td><input type="radio" name="emotional" value="poor"></td>
                        <td><input type="radio" name="emotional" value="fair"></td>
                        <td><input type="radio" name="emotional" value="good"></td>
                        <td><input type="radio" name="emotional" value="excellent"></td>
                    </tr>
                    <tr>
                        <td>OTHER:</td>
                        <td colspan="4"><input type="text" style="width: 95%; height: 200%;"></td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <h2><i class="fas fa-star"></i> 3. Strengths</h2>
                <textarea id="strengths" placeholder="Enter strengths (spelling and grammar to be improved by AI)"></textarea>
            </div>

            <div class="section">
                <h2><i class="fas fa-clipboard-list"></i> 4. Checklist of disorders</h2>
                
                <h3>ADHD Checklist</h3>
                <div class="checkbox-list">
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd1">
                        <label for="adhd1">Easily distracted and struggles to stay focused.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd2">
                        <label for="adhd2">Frequently makes careless mistakes.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd3">
                        <label for="adhd3">Difficulty following instructions.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd4">
                        <label for="adhd4">Avoids tasks that require sustained mental effort.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd5">
                        <label for="adhd5">Frequently loses items (e.g., school supplies, toys).</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd6">
                        <label for="adhd6">Fidgets or squirms often.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd7">
                        <label for="adhd7">Difficulty remaining seated when expected.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd8">
                        <label for="adhd8">Runs/climbs inappropriately.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd9">
                        <label for="adhd9">Talks excessively or interrupts others.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="adhd10">
                        <label for="adhd10">Acts impulsively without thinking.</label>
                    </div>
                </div>

                <h3>Autism Spectrum Disorder (ASD) Checklist</h3>
                <div class="checkbox-list">
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd1">
                        <label for="asd1">Limited or no eye contact.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd2">
                        <label for="asd2">Difficulty understanding or expressing emotions.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd3">
                        <label for="asd3">Prefers solitary play; struggles to form peer relationships.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd4">
                        <label for="asd4">Unusual or exaggerated gestures.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd5">
                        <label for="asd5">Delayed or unusual speech development.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd6">
                        <label for="asd6">Repetitive behaviors (e.g., hand-flapping, rocking).</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd7">
                        <label for="asd7">Intense focus on specific interests.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd8">
                        <label for="asd8">Strong need for routines and becomes upset if disrupted.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="asd9">
                        <label for="asd9">Unusual sensory reactions (e.g., to loud noises, textures).</label>
                    </div>
                </div>

                <h3>Dyslexia Checklist</h3>
                <div class="checkbox-list">
                    <div class="checkbox-item">
                        <input type="checkbox" id="dys1">
                        <label for="dys1">Difficulty recognizing letters and matching them to sounds.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="dys2">
                        <label for="dys2">Struggles to learn and remember sight words.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="dys3">
                        <label for="dys3">Reads slowly with frequent errors.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="dys4">
                        <label for="dys4">Poor comprehension of what is read.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="dys5">
                        <label for="dys5">Avoids reading.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="dys6">
                        <label for="dys6">Frequently confuses similar-looking letters (e.g., b/d, p/q).</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="dys7">
                        <label for="dys7">Struggles with consistent spelling of simple words.</label>
                    </div>
                </div>

                <h3>Delayed Speech Checklist</h3>
                <div class="checkbox-list">
                    <div class="checkbox-item">
                        <input type="checkbox" id="speech1">
                        <label for="speech1">Limited or no use of words by age 2.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="speech2">
                        <label for="speech2">Difficulty combining words into simple phrases by age 3.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="speech3">
                        <label for="speech3">Limited vocabulary compared to peers.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="speech4">
                        <label for="speech4">Struggles to pronounce words or frequently mispronounces common words.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="speech5">
                        <label for="speech5">Echoes or repeats words instead of generating their own speech (echolalia).</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="speech6">
                        <label for="speech6">Uses gestures more frequently than words to communicate.</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="speech7">
                        <label for="speech7">Difficulty understanding and following verbal instructions.</label>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2><i class="fas fa-info-circle"></i> 5. Additional Information</h2>
                <textarea id="additionalInfo" placeholder="Enter additional information (spelling and grammar to be improved by AI)"></textarea>
            </div>

            <button class="submit-btn" onclick="submitAssessment()">
                <i class="fas fa-paper-plane"></i> Submit Assessment
            </button>
        </div>
    </main>

    <script>
        // Add progress tracking
        function updateProgress() {
            const totalFields = document.querySelectorAll('input, textarea').length;
            const filledFields = document.querySelectorAll('input:checked, input[type="text"]:not(:placeholder-shown), textarea:not(:placeholder-shown)').length;
            const progress = (filledFields / totalFields) * 100;
            document.getElementById('progressBar').style.width = progress + '%';
        }

        // Add event listeners to all inputs
        document.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('change', updateProgress);
            input.addEventListener('input', updateProgress);
        });

        function submitAssessment() {
            const formData = new FormData();
            
            // Add form fields to formData
            formData.append('childName', document.getElementById('childName').value);
            formData.append('gender', document.querySelector('input[name="gender"]:checked').value);
            
            // Add all radio button values
            const radioGroups = ['reading', 'writing', 'mathematics', 'expressive', 'receptive', 'social', 
                                'fine', 'gross', 'attention', 'impulse', 'interaction', 'emotional'];
            
            radioGroups.forEach(group => {
                const selected = document.querySelector(`input[name="${group}"]:checked`);
                formData.append(group, selected ? selected.value : '');
            });
            
            // Add text areas
            formData.append('strengths', document.getElementById('strengths').value);
            formData.append('additionalInfo', document.getElementById('additionalInfo').value);

            // Submit the form using fetch - Updated PHP filename
            fetch('save-specialist-assessment.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(result => {
                if (result === 'success') {
                    alert('Assessment submitted successfully!');
                    window.location.href = 'specialist-dashboard.html';
                } else {
                    alert('Error submitting assessment. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error submitting assessment. Please try again.');
            });
        }
    </script>
</body>
</html>         
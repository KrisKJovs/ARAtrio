<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Education Assessment Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        .section {
            margin-bottom: 30px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #1a5f7a;
            font-size: 1.2em;
            padding-bottom: 10px;
            border-bottom: 2px solid #1a5f7a;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #1a5f7a;
            color: white;
        }
        .skills-table td {
            text-align: center;
        }
        .text-area {
            width: 100%;
            min-height: 80px;
            margin: 5px 0;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f5f5f5;
        }
        .input-field {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
            transition: all 0.3s ease;
        }
        .input-field:focus {
            outline: none;
            border-color: #1a5f7a;
            box-shadow: 0 0 5px rgba(26, 95, 122, 0.3);
        }
        .therapy-section {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #eee;
        }
        .button-container {
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        .submit-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            font-size: 1.1em;
            transition: all 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: #f0f0f0;
        }
        .progress {
            width: 0%;
            height: 100%;
            background: #4CAF50;
            transition: width 0.3s ease;
        }
        .header {
            position: sticky;
            top: 0;
            background-color: #1a5f7a;
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
            background-color: #155066;
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
            background-color: #12455a;
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
            <h2><i class="fas fa-file-medical"></i> Assessment Form</h2>
        </div>
        <button class="logout-btn" onclick="window.location.href='login.html'">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </button>
    </div>

    <div class="progress-bar">
        <div class="progress" id="formProgress"></div>
    </div>

    <div class="form-container">
        <h1>SPECIAL EDUCATION ASSESSMENT FORM</h1>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-user"></i> 1. General Information
            </h2>
            <input type="text" class="input-field" placeholder="Child's Full Name">
            <div style="display: flex; gap: 10px;">
                <input type="date" class="input-field" placeholder="Date of Birth">
                <input type="number" class="input-field" placeholder="Age">
                <input type="text" class="input-field" placeholder="Gender">
            </div>
            <input type="text" class="input-field" placeholder="Parent/Guardian's Name">
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-history"></i> 2. Background Information
            </h2>
            <label>
                <input type="checkbox"> Diagnostic Report attached
            </label>
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-baby"></i> 3. Developmental History
            </h2>
            <p>At what age did the child:</p>
            <div style="display: grid; grid-template-columns: 1fr 1fr;">
                <div>
                    <label>Sit up: <input type="text" class="input-field"></label>
                    <label>Crawl: <input type="text" class="input-field"></label>
                    <label>Walk: <input type="text" class="input-field"></label>
                </div>
                <div>
                    <label>Speak first words: <input type="text" class="input-field"></label>
                    <label>Form sentences: <input type="text" class="input-field"></label>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-graduation-cap"></i> 4. Educational Information
            </h2>
            <input type="text" class="input-field" placeholder="Previous School attended">
            <input type="text" class="input-field" placeholder="Level">
            <input type="text" class="input-field" placeholder="Special Education Services Received (if any)">
            <input type="text" class="input-field" placeholder="Individualized Education Plan (IEP): [Yes/No]">
            <input type="text" class="input-field" placeholder="Other Services">
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-exclamation-circle"></i> 5. Areas of Concern
            </h2>
            
            <h3>Academic Skills:</h3>
            <table class="skills-table">
                <tr>
                    <th>Skill</th>
                    <th>Poor</th>
                    <th>Fair</th>
                    <th>Good</th>
                    <th>Excellent</th>
                </tr>
                <tr>
                    <td>Reading</td>
                    <td><input type="radio" name="reading"></td>
                    <td><input type="radio" name="reading"></td>
                    <td><input type="radio" name="reading"></td>
                    <td><input type="radio" name="reading"></td>
                </tr>
                <!-- Add similar rows for Writing and Mathematics -->
            </table>

            <!-- Similar tables for Communication, Motor, and Behavioral Skills -->
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-star"></i> 6. Strengths and Interests
            </h2>
            <textarea class="text-area" placeholder="Academic Strengths"></textarea>
            <textarea class="text-area" placeholder="Social Strengths"></textarea>
            <textarea class="text-area" placeholder="Personal Interests/Hobbies"></textarea>
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-hands-helping"></i> 7. Current Services and Therapies
            </h2>
            <div class="therapy-section">
                <h3>Occupational Therapy:</h3>
                <input type="text" class="input-field" placeholder="Therapist Name">
                <input type="text" class="input-field" placeholder="Frequency">
                <textarea class="text-area" placeholder="Goals"></textarea>
            </div>
            <!-- Similar sections for Speech, Physical, and Behavioral Therapy -->
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-comments"></i> 8. Parent/Guardian Input
            </h2>
            <textarea class="text-area" placeholder="What are your primary concerns regarding your child's development?"></textarea>
            <textarea class="text-area" placeholder="What do you hope to achieve through our special education program?"></textarea>
            <textarea class="text-area" placeholder="Are there any specific strategies or approaches that have been effective for your child?"></textarea>
        </div>

        <div class="section">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i> 9. Additional Information
            </h2>
            <textarea class="text-area" placeholder="Is there any other information you feel is important for us to know about your child?"></textarea>
        </div>

        <div class="button-container">
            <button class="submit-btn" onclick="generateAssessment()">
                <i class="fas fa-file-export"></i> Generate Assessment
            </button>
            <button class="submit-btn" onclick="createShareableLink()">
                <i class="fas fa-share-alt"></i> Create Shareable Link
            </button>
        </div>
    </div>

    <script>
        // Update progress bar as user fills form
        document.querySelectorAll('input, textarea').forEach(element => {
            element.addEventListener('change', updateProgress);
        });

        function updateProgress() {
            const totalFields = document.querySelectorAll('input, textarea').length;
            const filledFields = Array.from(document.querySelectorAll('input, textarea'))
                .filter(field => field.value.trim() !== '').length;
            const progress = (filledFields / totalFields) * 100;
            document.getElementById('formProgress').style.width = progress + '%';
        }

        function generateAssessment() {
            // Add logic to generate and download assessment
            alert('Generating assessment...');
        }

        function createShareableLink() {
            // Add logic to create shareable link
            alert('Creating shareable link...');
        }
    </script>
</body>
</html> 
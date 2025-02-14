<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEP Generation - Special Needs Reporting System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #e9f5ff;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2, h3, h4, h5 {
            color: #1a73e8;
            margin-bottom: 10px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        label {
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            width: 100%;
        }
        .section {
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .back-button {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #1557b0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f0f8ff;
        }
        table input[type="text"] {
            width: 95%;
        }
        .tooltip {
            margin-left: 5px;
            color: #888;
            cursor: pointer;
        }
        .add-row-btn {
            background-color: #34a853;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .add-row-btn:hover {
            background-color: #2d8e47;
        }

        .goal-input, .objective-input, .timeframe-input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #activitiesTable {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        #activitiesTable th,
        #activitiesTable td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        #activitiesTable th:nth-child(1) { width: 20%; }
        #activitiesTable th:nth-child(2) { width: 35%; }
        #activitiesTable th:nth-child(3) { width: 30%; }
        #activitiesTable th:nth-child(4) { width: 15%; }

        .goal-input,
        .activity-input,
        .frequency-input {
            width: 95%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .remove-row-btn {
            padding: 6px 12px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .remove-row-btn:hover {
            background-color: #c82333;
        }

        .add-row-btn {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .add-row-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <button class="back-button" onclick="window.location.href='admin-dashboard.html'">
        <i class="fas fa-arrow-left"></i> Back to Dashboard
    </button>
    <div class="container">
        <h2>Individualized Education Plan (IEP) Form</h2>
        <form>
            <div class="section">
                <h3>Section A: Background Information</h3>
                <label>Child's Name: <i class="fas fa-info-circle tooltip" title="Enter the full name of the child."></i></label>
                <input type="text" placeholder="Enter child's name">
                <label>Date of Birth: <i class="fas fa-info-circle tooltip" title="Select the child's date of birth."></i></label>
                <input type="date">
                <label>Gender:</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <label>IEP Start Date:</label>
                <input type="date">
                <label>Grade/Level:</label>
                <input type="text" placeholder="Enter grade or level">
                <label>Parent/Guardian's Name:</label>
                <input type="text" placeholder="Enter parent/guardian's name">
                <label>Contact Information:</label>
                <label>Phone:</label>
                <input type="tel" placeholder="Enter phone number">
                <label>Email:</label>
                <input type="email" placeholder="Enter email address">
                <label>Primary Language:</label>
                <input type="text" placeholder="Enter primary language">
                <label>Medical Alerts/Medications:</label>
                <input type="text" placeholder="Enter any medical alerts or medications">
            </div>

            <div class="section">
                <h3>Eligibility Criteria:</h3>
                <div class="checkbox-group">
                    <label><input type="checkbox"> Autism Spectrum Disorder</label>
                    <label><input type="checkbox"> Speech/Language Impairment</label>
                    <label><input type="checkbox"> ADHD/ADD</label>
                    <label><input type="checkbox"> Learning Disability</label>
                    <label><input type="checkbox"> Developmental Delay</label>
                    <label><input type="checkbox"> Other: <input type="text"></label>
                </div>
            </div>

            <div class="section">
                <h3>Section B: Developmental History and Assessment Summary</h3>
                <h4>Developmental Milestones:</h4>
                <label>Sat up at age: <input type="text"></label>
                <label>Crawled at age: <input type="text"></label>
                <label>Walked at age: <input type="text"></label>
                <label>First words at age: <input type="text"></label>
                <label>Formed sentences at age: <input type="text"></label>
            </div>

            <div class="section">
                <h4>Previous Schools/Services:</h4>
                <label>Previous school: <input type="text"></label>
                <label>Special education services received: 
                    <input type="radio" name="sped" value="yes"> Yes
                    <input type="radio" name="sped" value="no"> No
                </label>
                <label>Individualized Education Plan (IEP): 
                    <input type="radio" name="prev_iep" value="yes"> Yes
                    <input type="radio" name="prev_iep" value="no"> No
                </label>
                <label>Other services (e.g., therapy): <input type="text"></label>
            </div>

            <div class="section">
                <h4>Areas of Concern:</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox"> Communication</label>
                    <label><input type="checkbox"> Cognitive Development</label>
                    <label><input type="checkbox"> Motor Skills</label>
                    <label><input type="checkbox"> Social Interaction</label>
                    <label><input type="checkbox"> Behavioral Skills</label>
                    <label><input type="checkbox"> Emotional Regulation</label>
                    <label><input type="checkbox"> Sensory Processing</label>
                    <label><input type="checkbox"> Adaptive Skills</label>
                </div>
            </div>

            <div class="section">
                <h3>Section C: Parent/Guardian Input</h3>
                <label>Primary Concerns: <input type="text"></label>
                <label>Goals for Your Child: <input type="text"></label>
                <label>Strategies/Approaches That Have Worked: <input type="text"></label>
            </div>

            <div class="section">
                <h3>Section D: Present Levels of Performance and Individual Needs</h3>
                <h4>Academic and Developmental Skills</h4>
                <div>
                    <h5>Cognitive Development</h5>
                    <label>Current Level:</label>
                    <input type="radio" name="cognitive" value="proficient"> Proficient
                    <input type="radio" name="cognitive" value="developing"> Developing
                    <input type="radio" name="cognitive" value="needs"> Needs Improvement
                    <br>
                    <label>Comments: <input type="text" placeholder="Comments on problem-solving, number recognition, etc."></label>
                </div>
                <div>
                    <h5>Communication Skills</h5>
                    <label>Current Level:</label>
                    <input type="radio" name="communication" value="proficient"> Proficient
                    <input type="radio" name="communication" value="developing"> Developing
                    <input type="radio" name="communication" value="needs"> Needs Improvement
                    <br>
                    <label>Comments: <input type="text" placeholder="Comments on expressive/receptive language, sentence formation, etc."></label>
                </div>
            </div>

            <div class="section">
                <h3>Section E: IEP Goals and Objectives</h3>
                <table>
                    <tr>
                        <th>Skill Area</th>
                        <th>Current Level</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                        <td>Motor Skills</td>
                        <td>
                            <input type="radio" name="motor" value="proficient"> Proficient
                            <input type="radio" name="motor" value="developing"> Developing
                            <input type="radio" name="motor" value="needs"> Needs Improvement
                        </td>
                        <td><input type="text" placeholder="Fine motor and gross motor skills"></td>
                    </tr>
                    <tr>
                        <td>Social Interaction</td>
                        <td>
                            <input type="radio" name="social" value="proficient"> Proficient
                            <input type="radio" name="social" value="developing"> Developing
                            <input type="radio" name="social" value="needs"> Needs Improvement
                        </td>
                        <td><input type="text" placeholder="Turn-taking, initiating conversations, etc."></td>
                    </tr>
                    <tr>
                        <td>Emotional Regulation</td>
                        <td>
                            <input type="radio" name="emotional" value="proficient"> Proficient
                            <input type="radio" name="emotional" value="developing"> Developing
                            <input type="radio" name="emotional" value="needs"> Needs Improvement
                        </td>
                        <td><input type="text" placeholder="Managing emotions, handling transitions, etc."></td>
                    </tr>
                    <tr>
                        <td>Sensory Processing</td>
                        <td>
                            <input type="radio" name="sensory" value="proficient"> Proficient
                            <input type="radio" name="sensory" value="developing"> Developing
                            <input type="radio" name="sensory" value="needs"> Needs Improvement
                        </td>
                        <td><input type="text" placeholder="Response to sensory input, modulation"></td>
                    </tr>
                </table>
                
                <h4>Goals and Objectives (10 month period)</h4>
                <table id="goalsTable">
                    <tr>
                        <th>Goal</th>
                        <th>Objective</th>
                        <th>Time Frame</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="goal-input"></td>
                        <td><input type="text" class="objective-input"></td>
                        <td><input type="text" class="timeframe-input"></td>
                        <td><button type="button" class="remove-row-btn">Remove</button></td>
                    </tr>
                </table>
                <button type="button" id="addGoalRow" class="add-row-btn">
                    <i class="fas fa-plus"></i> Add Goal
                </button>
            </div>

            <div class="section">
                <h3>Section F: Planned Activities and Services</h3>
                <table id="activitiesTable">
                    <tr>
                        <th>Goal</th>
                        <th>Planned Activity/Service</th>
                        <th>Frequency/Duration</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="goal-input"></td>
                        <td><input type="text" class="activity-input"></td>
                        <td><input type="text" class="frequency-input"></td>
                        <td><button type="button" class="remove-row-btn">Remove</button></td>
                    </tr>
                </table>
                <button type="button" id="addActivityRow" class="add-row-btn">
                    <i class="fas fa-plus"></i> Add Activity
                </button>
            </div>

            <div class="section">
                <h3>Section G: Accommodations and Modifications</h3>
                <h4>Classroom Accommodations:</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox"> Use of visual schedules for transitions</label>
                    <label><input type="checkbox"> Sensory breaks when needed</label>
                    <label><input type="checkbox"> Simplified instructions with processing time</label>
                </div>
                
                <h4>Modifications:</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox"> Reduced number of tasks</label>
                    <label><input type="checkbox"> Extended time for completing written tasks</label>
                </div>
            </div>

            <div class="section">
                <h3>Progress Report</h3>
                <h4>Review of Goals:</h4>
                <label>Progress made: <input type="text"></label><br>
                <label>Adjustments needed: <input type="text"></label>
            </div>

            <div class="section">
                <h3>Section I: Review and Adjustment Plan</h3>
                <label>Next IEP Review Date: <input type="date"></label><br>
                <label>Adjustments to Goals/Services (if any): <input type="text"></label>
            </div>
        </form>
    </div>

    <script>
        // Check if user is logged in and is an admin
        window.onload = function() {
            const userStatus = sessionStorage.getItem('userStatus');
            if (!userStatus || userStatus !== 'Admin') {
                window.location.href = 'login.html';
            }
        };

        document.getElementById('addGoalRow').addEventListener('click', function() {
            const table = document.getElementById('goalsTable');
            const newRow = table.insertRow(-1);
            
            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);
            
            cell1.innerHTML = '<input type="text" class="goal-input">';
            cell2.innerHTML = '<input type="text" class="objective-input">';
            cell3.innerHTML = '<input type="text" class="timeframe-input">';
            cell4.innerHTML = '<button type="button" class="remove-row-btn">Remove</button>';

            cell4.querySelector('.remove-row-btn').addEventListener('click', function() {
                table.deleteRow(newRow.rowIndex);
            });
        });

        document.querySelectorAll('.remove-row-btn').forEach(button => {
            button.addEventListener('click', function() {
                const row = button.parentElement.parentElement;
                row.parentElement.removeChild(row);
            });
        });

        // Add row functionality for activities table
        document.getElementById('addActivityRow').addEventListener('click', function() {
            const table = document.getElementById('activitiesTable');
            const newRow = table.insertRow(-1);
            
            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);
            
            cell1.innerHTML = '<input type="text" class="goal-input">';
            cell2.innerHTML = '<input type="text" class="activity-input">';
            cell3.innerHTML = '<input type="text" class="frequency-input">';
            cell4.innerHTML = '<button type="button" class="remove-row-btn">Remove</button>';

            cell4.querySelector('.remove-row-btn').addEventListener('click', function() {
                table.deleteRow(newRow.rowIndex);
            });
        });

        // Add event listeners to existing remove buttons in activities table
        document.querySelectorAll('#activitiesTable .remove-row-btn').forEach(button => {
            button.addEventListener('click', function() {
                const row = button.parentElement.parentElement;
                row.parentElement.removeChild(row);
            });
        });
    </script>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Enrolled - Special Needs Reporting System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* ... Include your existing styles ... */
        .student-list {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .student-card {
            background-color: white;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            cursor: pointer;
        }

        .student-card:hover {
            background-color: #f8f9fa;
        }

        .document-list {
            display: none;
            margin-left: 2rem;
            padding: 1rem;
            background-color: #f8f9fa;
            border-left: 3px solid #4CAF50;
        }

        .document-link {
            display: block;
            padding: 0.5rem;
            color: #333;
            text-decoration: none;
            margin-bottom: 0.5rem;
        }

        .document-link:hover {
            color: #4CAF50;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #7B68EE;
            color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .logo-section:hover {
            transform: scale(1.02);
        }

        .logo-section img {
            height: 45px;
            width: 45px;
            background: white;
            border-radius: 50%;
            padding: 5px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        #userEmail {
            color: white;
            font-size: 0.9rem;
        }

        .logout-btn {
            background-color: white;
            color: #333;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }

        .student-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* ... keep existing student-card styles ... */
        }

        .student-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .student-avatar {
            background-color: #4CAF50;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .document-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            /* ... keep existing document-link styles ... */
        }

        .expand-icon {
            transition: transform 0.3s ease;
        }

        .expanded .expand-icon {
            transform: rotate(180deg);
        }

        .title-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title-content {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .title-content i {
            font-size: 1.5rem;
            color: #7B68EE;
        }

        .title-content h1 {
            font-size: 1.5rem;
            margin: 0;
            color: #333;
        }

        .search-container {
            display: flex;
            gap: 0.5rem;
        }

        #searchInput {
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
        }

        .search-btn {
            background: #7B68EE;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background: #6c5ce7;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo-section">
            <img src="./images/AraLogo.png" alt="Ara Logo" onclick="goToAdminDashboard()">
        </div>
        <div class="user-info">
            <span id="userEmail">specialist@gg.com</span>
            <button class="logout-btn" onclick="handleLogout()">Logout</button>
        </div>
    </div>

    <div class="title-container">
        <div class="title-content">
            <i class="fas fa-users"></i>
            <h1>Students Enrolled</h1>
        </div>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search student...">
            <button class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <div class="student-list">
        <!-- Student cards will be dynamically added here -->
    </div>

    <script>
        // Check authentication
        window.onload = function() {
            const userStatus = sessionStorage.getItem('userStatus');
            const userEmail = sessionStorage.getItem('userEmail');
            
            if (!userStatus || userStatus !== 'Admin') {
                window.location.href = 'login.html';
                return;
            }
            
            document.getElementById('userEmail').textContent = userEmail;
            loadStudents();
        };

        function loadStudents() {
            const sampleStudents = [
                { id: 1, name: "John Doe" },
                { id: 2, name: "Jane Smith" },
                // Add more sample students as needed
            ];

            const studentList = document.querySelector('.student-list');
            
            window.allStudents = sampleStudents;
            displayStudents(sampleStudents);
        }

        function displayStudents(students) {
            const studentList = document.querySelector('.student-list');
            studentList.innerHTML = ''; // Clear current list
            
            students.forEach(student => {
                const studentCard = createStudentCard(student);
                studentList.appendChild(studentCard);
            });
        }

        function createStudentCard(student) {
            const card = document.createElement('div');
            card.className = 'student-card';
            
            const initials = student.name.split(' ').map(n => n[0]).join('');
            
            card.innerHTML = `
                <div class="student-info">
                    <div class="student-avatar">${initials}</div>
                    <h3>${student.name}</h3>
                </div>
                <div class="document-list" id="docs-${student.id}">
                    <a href="#" class="document-link" onclick="viewDocument('assessment', ${student.id})">
                        LD-001 SPED ASSESSMENT
                    </a>
                    <a href="#" class="document-link" onclick="viewDocument('iep', ${student.id})">
                        IEP
                    </a>
                    <a href="#" class="document-link" onclick="viewDocument('progress', ${student.id})">
                        LD-R001 Weekly Progress Report
                    </a>
                </div>
            `;

            card.querySelector('h3').addEventListener('click', () => {
                const docList = card.querySelector('.document-list');
                docList.style.display = docList.style.display === 'none' ? 'block' : 'none';
            });

            return card;
        }

        function viewDocument(type, studentId) {
            // Handle document viewing based on type and student ID
            switch(type) {
                case 'assessment':
                    window.location.href = `assessment-view.html?student=${studentId}`;
                    break;
                case 'iep':
                    window.location.href = `iep-view.html?student=${studentId}`;
                    break;
                case 'progress':
                    window.location.href = `weekly-progress-view.html?student=${studentId}`;
                    break;
            }
        }

        // Function to go back to admin dashboard
        function goToAdminDashboard() {
            window.location.href = 'admin-dashboard.html';
        }

        // Function to handle logout
        function handleLogout() {
            // Clear any session data if needed
            sessionStorage.clear();
            // Redirect to login page
            window.location.href = 'login.html';
        }

        // Update search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const filteredStudents = window.allStudents.filter(student => 
                student.name.toLowerCase().includes(searchTerm)
            );
            displayStudents(filteredStudents);
        });
    </script>
</body>
</html> 
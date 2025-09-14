<html lang="en"></html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go School - School Management System</title>
    <meta name="description" content="Go School is an all-in-one school management system offering features like attendance tracking, fee management, student details, and more.">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <i class="fas fa-graduation-cap"></i>
                <h1>Go School</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <button id="dark-mode-toggle" class="dark-mode-toggle">
                <i class="fas fa-moon"></i>
            </button>
            <div class="burger" id="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <h1>Welcome to Go School</h1>
            <p>Your all-in-one school management solution</p>
            <a href="login.php" class="cta-button">Login</a>
            <a href="#features" class="cta-button">Explore Features</a>
        </section>

        <section id="features" class="features">
            <h2>Our Features</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="fas fa-user-check"></i>
                    <h3>Attendance Details</h3>
                    <p>Track and manage student attendance effortlessly</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-money-bill-wave"></i>
                    <h3>Fee Details</h3>
                    <p>Manage and view fee information with ease</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-user-graduate"></i>
                    <h3>Student Details</h3>
                    <p>Access comprehensive student information</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>Time Table</h3>
                    <p>View and manage class schedules efficiently</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-chart-bar"></i>
                    <h3>Marks</h3>
                    <p>Record and analyze student performance</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>Teacher Portal</h3>
                    <p>Dedicated tools for teachers to manage classes</p>
                </div>
                <!-- New Feature Cards -->
                <div class="feature-card">
                    <i class="fas fa-book"></i>
                    <h3>Notes</h3>
                    <p>Access and share class notes easily</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-list-alt"></i>
                    <h3>Syllabus</h3>
                    <p>View detailed syllabus for each subject</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-bus"></i>
                    <h3>Bus Service</h3>
                    <p>Check bus routes and stops</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-calendar-times"></i>
                    <h3>Leaves</h3>
                    <p>Apply and track leave requests</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-file-alt"></i>
                    <h3>Exam Result</h3>
                    <p>View and download exam results</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-comments"></i>
                    <h3>Feedbacks</h3>
                    <p>Provide and view feedback for students</p>
                </div>
            </div>
        </section>

        <!-- <section id="login" class="login">
            <h2>Login</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="userType">User Type:</label>
                    <select id="userType" name="userType" required>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select>
                </div>
                <button type="submit">Login</button>
                <div id="error-message" class="error-message"></div>
            </form>
        </section> -->
    </main>

    <footer>
        <p>&copy; 2024 Go School. All rights reserved.</p>
        <p>Made with 💗 by Amol Gupta, Amrita Singh, Amardeep and Aditya Yadav</p>
    </footer>

    <script src="assets/js/login.js"></script>
    <script>
        const toggleButton = document.getElementById('dark-mode-toggle');
        const body = document.body;
        const burger = document.getElementById('burger');
        const navLinks = document.querySelector('.nav-links');

        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });

        burger.addEventListener('click', () => {
            navLinks.classList.toggle('nav-active');
            console.log('Burger menu clicked, nav-active class toggled');
        });
    </script>
</body>

</html>
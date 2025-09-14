# Go School - School Management System

![Go School Logo](images/1.png)

Go School is a comprehensive web-based school management system designed to streamline educational administration and enhance communication between students, teachers, and administrators.

## 🌐 Live Demo

**Website**: [https://go-school.is-best.net/?i=1](https://go-school.is-best.net/?i=1)

Try the live demo with the default credentials provided below!

## 🚀 Features

### Core Modules
- **👨‍🎓 Student Management** - Complete student information system with profiles and guardians
- **👩‍🏫 Teacher Management** - Teacher profiles, subject assignments, and class management
- **📊 Admin Panel** - Comprehensive administrative controls and system oversight
- **👑 Owner Panel** - Top-level management and system configuration

### Key Functionalities

#### 📚 Academic Management
- **Attendance Tracking** - Digital attendance system with date-wise records
- **Marks & Results** - Exam management and result processing
- **Time Table** - Class scheduling and timetable management
- **Subjects** - Subject creation and assignment to classes
- **Syllabus** - Digital syllabus management and distribution
- **Notes** - Class notes sharing and management

#### 🚌 Transportation
- **Bus Service** - Route management and bus tracking
- **Bus Stops** - Stop locations and timing management
- **Staff Management** - Driver and helper information

#### 💰 Financial Management
- **Fee Management** - Fee collection and payment tracking
- **Payroll** - Teacher salary management

#### 📢 Communication
- **Notice Board** - School-wide announcements and notices
- **Feedback System** - Teacher-student communication
- **Leave Management** - Leave applications and approvals
- **Reminders** - Personal task management

#### 🎥 Additional Features
- **Video Meetings** - Integrated meeting system for online classes
- **Dark/Light Theme** - User preference-based theming
- **Mobile Responsive** - Works seamlessly on all devices
- **Multi-role Access** - Different interfaces for different user types

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5
- **Backend**: PHP 8.1+
- **Database**: MySQL/MariaDB
- **Email**: PHPMailer for notifications
- **Icons**: Font Awesome 6.4.0
- **Server**: Apache/Nginx with PHP support

## 📋 Prerequisites

- PHP 8.1 or higher
- MySQL 5.7+ or MariaDB 10.4+
- Apache/Nginx web server
- Web browser with JavaScript enabled

## 🔧 Installation

### 1. Clone the Repository
```bash
git clone <repository-url>
cd go_school
```

### 2. Database Setup
1. Create a MySQL database named `_sms`
2. Import the database schema:
```bash
mysql -u root -p _sms < database/_sms.sql
```

### 3. Configuration
1. Update database credentials in `assets/config.php`:
```php
$server = "localhost";
$user = "your_username";
$password = "your_password";
$db = "_sms";
```

### 4. File Permissions
Ensure write permissions for upload directories:
```bash
chmod 755 adminUploads/
chmod 755 studentUploads/
chmod 755 teacherUploads/
chmod 755 notesUploads/
chmod 755 noticeUploads/
chmod 755 syllabusUploads/
```

### 5. Web Server Setup
- Place the project in your web server's document root
- Ensure PHP modules are enabled: `mysqli`, `gd`, `fileinfo`

## 🚪 Default Login Credentials

| Role | Email | Password |
|------|-------|----------|
| Owner | owner@gmail.com | 123 |
| Admin | admin@gmail.com | 123 |
| Teacher | teacher@gmail.com | 123 |
| Student | student@gmail.com | 123 |

> **⚠️ Important**: Change default passwords after first login!

## 📱 User Roles & Access

### 🏢 Owner Panel
- System-wide oversight
- User management
- Payment processing
- Notice management
- Attendance monitoring

### 👨‍💼 Admin Panel
- Student and teacher management
- Academic administration
- Bus and transportation
- Marks and examination
- Notice board management
- Settings and configuration

### 👩‍🏫 Teacher Panel
- Class management
- Attendance marking
- Marks entry
- Notes and syllabus upload
- Student feedback
- Leave applications
- Personal reminders

### 👨‍🎓 Student Panel
- Personal dashboard
- Attendance view
- Marks and results
- Time table access
- Fee payment
- Bus information
- Notes and syllabus download

## 📁 Project Structure

```
go_school/
├── admin_panel/          # Admin interface
├── teacher_panel/        # Teacher interface  
├── student_panel/        # Student interface
├── owner_panel/          # Owner interface
├── assets/              # Backend PHP scripts
├── database/            # Database schema
├── images/              # Static images
├── css/                 # Stylesheets
├── js/                  # JavaScript files
├── shared/              # Shared components
├── Meeting/             # Video meeting system
├── phpmailer/           # Email functionality
├── screenshots/         # Application screenshots
└── uploads/             # File upload directories
```

## 🔐 Security Features

- Password hashing with PHP's `password_hash()`
- SQL injection prevention with prepared statements
- Session management and role-based access control
- File upload validation and sanitization
- CSRF protection on forms

## 📧 Email Configuration

Configure PHPMailer in the relevant files for:
- Password reset functionality
- Notification emails
- System alerts

## 🎨 Customization

### Themes
- Light and dark theme support
- User preference storage
- CSS custom properties for easy theming

### Branding
- Update logo in `images/1.png`
- Modify school name in configuration files
- Customize color scheme in CSS files

## 🐛 Troubleshooting

### Common Issues

1. **Database Connection Error**
   - Check credentials in `assets/config.php`
   - Ensure MySQL service is running
   - Verify database exists

2. **File Upload Issues**
   - Check directory permissions
   - Verify PHP upload limits
   - Ensure adequate disk space

3. **Session Issues**
   - Check PHP session configuration
   - Verify session directory permissions

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 👥 Development Team

- **Amol Gupta** - Lead Developer
- **Amrita Singh** - Frontend Developer  
- **Amardeep** - Backend Developer
- **Aditya Yadav** - Database Designer

## 📞 Support

For support and queries:
- Create an issue on GitHub
- Contact the development team
- Check the documentation

## 📱 Android WebView App

We also have a companion Android WebView app that provides native mobile access to the Go School system:

**Repository**: [Go School Android App](https://github.com/your-username/go-school-android)

### Features:
- Native Android interface
- Offline capability
- Push notifications
- Optimized for mobile devices
- Same login credentials as web version

### Installation:
1. Download the APK from the releases section
2. Enable "Install from unknown sources" in Android settings
3. Install the APK
4. Launch and login with your credentials

## 🔄 Version History

- **v1.0.0** - Initial release with core features
- **v1.1.0** - Added video meeting functionality
- **v1.2.0** - Enhanced UI/UX and mobile responsiveness
- **v1.3.0** - Android WebView app integration

---

**Made with 💗 by the Go School Development Team**

*Empowering education through technology*
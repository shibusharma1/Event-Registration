# 🎟️ Event Registration System

> **A modern, web-based Event Registration System built with Laravel**, designed to manage events efficiently and allow users to register seamlessly.  
> The application provides a clean UI, strong validation, and reliable feedback mechanisms.

---

## 🚀 **Features**

> ✔️ Key capabilities of the system

- Event creation and management  
- User-friendly event registration form  
- Server-side validation using Laravel Validator  
- Success and error message handling  
- Clean and structured Laravel MVC architecture  
- Secure and scalable backend  
- Easy setup and deployment  

---

## 🛠️ **Tech Stack**

| Layer        | Technology |
|-------------|------------|
| **Backend** | Laravel (PHP Framework) |
| **Frontend** | Blade Templates, HTML, CSS, Bootstrap |
| **Database** | MySQL |
| **Server** | Apache / Nginx |
| **Version Control** | Git & GitHub |

---

## 📂 **Project Structure**

```plaintext
Event-Registration/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── README.md
⚙️ Prerequisites
Ensure the following are installed before running the project:

PHP 8.0 or higher

Composer

MySQL

Apache / Nginx
(XAMPP, WAMP, or Laragon recommended)

Git

📥 Installation & Setup
1️⃣ Clone the Repository
git clone https://github.com/shibusharma1/Event-Registration.git
cd Event-Registration
2️⃣ Install Dependencies
composer install
3️⃣ Environment Configuration
Copy the example environment file:

cp .env.example .env
Update database credentials in .env:

DB_DATABASE=your_database_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
4️⃣ Generate Application Key
php artisan key:generate
5️⃣ Run Migrations
php artisan migrate
6️⃣ Create Storage Link (Optional but Recommended)
php artisan storage:link
7️⃣ Start the Application
php artisan serve
php artisan queue:work
Access the application in your browser:

http://127.0.0.1:8000
✅ Validation & Error Handling
Built with Laravel’s robust validation system

Server-side validation using Laravel Validator

Real-time validation error messages

Preserves old input data on validation failure

Displays success messages on successful actions

🔐 Security Best Practices
CSRF protection enabled

Strong server-side validation

Secure environment configuration

Clean separation of logic and views

🧪 Testing
Run the default Laravel test suite:

php artisan test
🤝 Contribution
Contributions are welcome and appreciated!

Fork the repository

Create a new branch (feature/your-feature-name)

Commit your changes

Push to your fork

Create a Pull Request

📄 License
This project is open-source and available under the MIT License.

👨‍💻 Author
Shibu Sharma
🔗 GitHub: https://github.com/shibusharma1


---

# Campus Recruitment System 🎓  
## 📌 Overview  
The **Campus Recruitment System** is a web-based platform designed to streamline the recruitment process for colleges and universities. It provides a **centralized platform** where students, recruiters, and placement officers can interact efficiently.  

This system eliminates the need for manual paperwork, speeds up recruitment cycles, and ensures a transparent hiring process for all stakeholders.  

## ✨ Features  
- 👨‍🎓 **Student Module**  
  - Student registration & profile creation  
  - Upload resumes and certificates  
  - Apply for job postings  
  - View recruitment status  
- 🏢 **Recruiter Module**  
  - Post new job openings  
  - Filter and shortlist candidates  
  - Send interview notifications  
- 🎓 **Placement Officer Module**  
  - Approve student and recruiter registrations  
  - Manage and monitor recruitment activities  
  - Generate reports and statistics  
- 🔒 **Authentication & Security**  
  - Secure login for students, recruiters, and admins  
  - Role-based access control  

## 🛠️ Tech Stack  
- **Framework:** Laravel (PHP Framework)  
- **Backend:** PHP 8.x  
- **Database:** PostgreSQL  
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap  
- **Server:** Apache / Nginx  

## ⚙️ Installation & Setup  
### Prerequisites  
Make sure you have the following installed:  
- PHP >= 8.0  
- Composer  
- PostgreSQL  
- Git  
- Apache/Nginx server (XAMPP/LAMP/WAMP or manual setup)  

### Steps  
1. **Clone the repository**  
   ```bash
   git clone https://github.com/your-username/campus-recruitment-system.git
   cd campus-recruitment-system
   ```  
2. **Install dependencies**  
   ```bash
   composer install
   ```  
3. **Configure Environment**  
   Copy `.env.example` to `.env` and update database credentials:  
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=campus_recruitment
   DB_USERNAME=your_postgres_user
   DB_PASSWORD=your_postgres_password
   ```  
4. **Run database migrations**  
   ```bash
   php artisan migrate
   ```  
5. **Start the development server**  
   ```bash
   php artisan serve
   ```  
   Access the project at: `http://127.0.0.1:8000`  

## 📊 System Architecture  
```
+---------------------+        +-----------------+        +--------------------+
|     Students        |<------>|   Application   |<------>|     Recruiters     |
| (Profiles, Apply)   |        |   (Laravel)     |        | (Job Postings)     |
+---------------------+        +-----------------+        +--------------------+
                                     |
                                     v
                              +--------------+
                              | PostgreSQL   |
                              |   Database   |
                              +--------------+
```  

## 🚀 Future Enhancements  
- AI-based resume shortlisting  
- Email & SMS notifications  
- Integration with third-party job portals  
- Analytics dashboard for placement officers  

## 📄 License  
This project is developed as part of an **academic mini-project**.  
For educational purposes only.  



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

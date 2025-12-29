# Property Laravel Project

Dự án Laravel được chuyển đổi từ template HTML tĩnh Property của Untree.co.

## Yêu cầu hệ thống

- PHP >= 8.2
- Composer
- MySQL/PostgreSQL/SQLite (tùy chọn)

## Cài đặt

### 1. Di chuyển vào thư mục dự án
```bash
cd /home/dell/nova/property-laravel
```

### 2. Cài đặt dependencies (nếu cần)
```bash
composer install
```

### 3. Cấu hình môi trường
File `.env` đã được tạo tự động. Bạn có thể chỉnh sửa các thông tin cấu hình:
```bash
nano .env
```

### 4. Khởi động server
```bash
php artisan serve
```

Truy cập: http://localhost:8000

## Cấu trúc dự án

### Routes (routes/web.php)
- `/` - Trang chủ (Home)
- `/properties` - Danh sách bất động sản
- `/property-single` - Chi tiết bất động sản
- `/services` - Dịch vụ
- `/about` - Giới thiệu
- `/contact` - Liên hệ

### Controllers (app/Http/Controllers/PageController.php)
Controller chính xử lý tất cả các trang:
- `home()` - Trang chủ
- `properties()` - Danh sách bất động sản
- `propertySingle()` - Chi tiết bất động sản
- `services()` - Dịch vụ
- `about()` - Giới thiệu
- `contact()` - Liên hệ

### Views (resources/views/)
- `layouts/app.blade.php` - Layout chính
- `home.blade.php` - Trang chủ
- `properties.blade.php` - Danh sách bất động sản
- `property-single.blade.php` - Chi tiết bất động sản
- `services.blade.php` - Dịch vụ
- `about.blade.php` - Giới thiệu
- `contact.blade.php` - Liên hệ

### Assets (public/)
- `css/` - File CSS
- `js/` - File JavaScript
- `images/` - Hình ảnh
- `fonts/` - Font chữ
- `favicon.png` - Icon trang web

## Tính năng đã chuyển đổi

✅ Layout chính với header, footer
✅ Trang chủ với:
  - Hero slider
  - Danh sách bất động sản phổ biến
  - Tính năng nổi bật
  - Đánh giá khách hàng
  - Thống kê
  - Danh sách đại lý

✅ Các trang placeholder:
  - Properties
  - Property Single
  - Services
  - About
  - Contact

## Phát triển tiếp theo

Bạn có thể tiếp tục phát triển các tính năng sau:

1. **Database & Models**
   - Tạo migration cho bảng properties, agents, testimonials
   - Tạo Model tương ứng
   - Seeder dữ liệu mẫu

2. **CRUD Operations**
   - Quản lý bất động sản
   - Quản lý đại lý
   - Quản lý đánh giá

3. **Form Contact**
   - Tạo form liên hệ với validation
   - Gửi email

4. **Search & Filter**
   - Tìm kiếm bất động sản
   - Lọc theo giá, vị trí, loại

5. **Authentication**
   - Đăng nhập/Đăng ký
   - Dashboard quản trị

## License

Template gốc: [Untree.co](https://untree.co/)

---

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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

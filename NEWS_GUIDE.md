# Hướng Dẫn Sử Dụng Tính Năng Tin Tức

## Tổng Quan
Hệ thống tin tức đã được tích hợp vào website Ngân Tín Group với đầy đủ chức năng quản lý và hiển thị tin tức.

## Cấu Trúc Database

### Bảng `news`
- `id`: ID tự động tăng
- `title`: Tiêu đề tin tức
- `slug`: URL thân thiện (tự động tạo từ title)
- `excerpt`: Tóm tắt ngắn
- `content`: Nội dung đầy đủ (HTML)
- `image`: Đường dẫn hình ảnh
- `category`: Danh mục (Bất Động Sản, Năng Lượng, v.v.)
- `is_featured`: Tin nổi bật (true/false)
- `views`: Số lượt xem
- `published_at`: Thời gian xuất bản
- `created_at`, `updated_at`: Timestamps

## Routes

### Front-end
- `GET /news` - Danh sách tất cả tin tức
- `GET /news/{slug}` - Chi tiết tin tức

### Admin (yêu cầu đăng nhập)
- `GET /admin/news` - Danh sách quản lý tin tức
- `GET /admin/news/create` - Form tạo tin mới
- `POST /admin/news` - Lưu tin mới
- `GET /admin/news/{id}` - Xem chi tiết
- `GET /admin/news/{id}/edit` - Form sửa tin
- `PUT/PATCH /admin/news/{id}` - Cập nhật tin
- `DELETE /admin/news/{id}` - Xóa tin

## Tính Năng

### Front-end
✅ Hiển thị danh sách tin tức với phân trang
✅ Tin nổi bật (Featured News)
✅ Chi tiết tin tức với sidebar tin liên quan
✅ Đếm lượt xem tự động
✅ Chia sẻ lên Facebook, Twitter, LinkedIn
✅ Responsive design
✅ Tìm kiếm theo danh mục

### Admin Panel
✅ Thêm/Sửa/Xóa tin tức
✅ Đánh dấu tin nổi bật
✅ Quản lý danh mục
✅ Đặt thời gian xuất bản
✅ Upload hình ảnh

## Model Methods

### News Model
```php
// Lấy tin đã xuất bản
News::published()->get();

// Lấy tin nổi bật
News::featured()->get();

// Tăng lượt xem
$news->incrementViews();
```

## Dữ Liệu Mẫu
Đã tạo sẵn 6 tin tức mẫu bao gồm:
1. Ngân Tín Group khởi công dự án khu đô thị sinh thái tại Vĩnh Long (Bất Động Sản) - Nổi bật
2. Ngân Tín Group mở rộng mạng lưới cửa hàng xăng dầu (Năng Lượng) - Nổi bật
3. Tập đoàn Ngân Tín ký kết hợp tác chiến lược với đối tác Nhật Bản (Năng Lượng Xanh) - Nổi bật
4. Khu logistics Ngân Tín chính thức đi vào hoạt động (Logistics)
5. Ngân Tín Group đạt doanh thu 5.000 tỷ đồng trong năm 2025 (Kinh Doanh)
6. Chương trình "Ngân Tín vì cộng đồng" trao 100 căn nhà tình thương (Cộng Đồng)

## Cách Sử Dụng

### Xem tin tức trên website
1. Truy cập menu "Tin Tức" trên thanh navigation
2. Hoặc truy cập trực tiếp: `http://localhost:8000/news`

### Quản lý tin tức (Admin)
1. Đăng nhập admin: `http://localhost:8000/admin/login`
2. Vào menu quản lý tin tức: `http://localhost:8000/admin/news`
3. Thêm/Sửa/Xóa tin tức tùy ý

### Thêm tin tức mới
```php
News::create([
    'title' => 'Tiêu đề tin',
    'category' => 'Bất Động Sản',
    'excerpt' => 'Tóm tắt ngắn',
    'content' => '<p>Nội dung đầy đủ</p>',
    'image' => 'images/news-1.jpg',
    'is_featured' => true,
    'published_at' => now(),
]);
```

## Danh Mục Tin Tức
- Bất Động Sản
- Năng Lượng
- Năng Lượng Xanh
- Logistics
- Kinh Doanh
- Cộng Đồng

## Views
- `resources/views/news/index.blade.php` - Danh sách tin tức
- `resources/views/news/show.blade.php` - Chi tiết tin tức
- `resources/views/admin/news/` - Các view quản lý (sẽ tạo sau nếu cần)

## Controllers
- `app/Http/Controllers/NewsController.php` - Front-end controller
- `app/Http/Controllers/Admin/NewsController.php` - Admin controller

## Tùy Chỉnh

### Thay đổi số lượng tin trên trang
Mở `app/Http/Controllers/NewsController.php`:
```php
$news = News::published()->paginate(9); // Đổi 9 thành số khác
```

### Thay đổi số tin nổi bật
```php
$featuredNews = News::published()->featured()->take(3)->get(); // Đổi 3 thành số khác
```

### Thêm hình ảnh tin tức
1. Upload hình vào thư mục `public/images/`
2. Khi tạo tin, điền đường dẫn: `images/ten-hinh.jpg`

## Lưu Ý
- Slug tự động tạo từ title (chuyển thành URL thân thiện)
- Views tự động tăng mỗi khi có người xem
- Tin chỉ hiển thị nếu `published_at` <= thời gian hiện tại
- Hỗ trợ HTML trong content để format văn bản

## Hỗ Trợ
Nếu có vấn đề, kiểm tra:
1. Database đã migrate chưa: `php artisan migrate`
2. Dữ liệu mẫu đã seed chưa: `php artisan db:seed --class=NewsSeeder`
3. Routes đã đúng chưa: `php artisan route:list | grep news`

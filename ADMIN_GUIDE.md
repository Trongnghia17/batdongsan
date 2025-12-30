# Hệ Thống Quản Trị Bất Động Sản - Hướng Dẫn Đăng Nhập Admin

## 🔐 Thông Tin Đăng Nhập

### Tài khoản Admin mặc định:
- **Email:** `admin@admin.com`
- **Mật khẩu:** `password`

## 📌 Các URL Quan Trọng

### Frontend (Người dùng):
- Trang chủ: `http://localhost:8000/`
- Danh sách BĐS: `http://localhost:8000/properties`

### Backend (Admin):
- Đăng nhập Admin: `http://localhost:8000/admin/login`
- Quản lý BĐS: `http://localhost:8000/admin/properties`

## 🚀 Hướng Dẫn Sử Dụng

### 1. Đăng nhập vào Admin Panel

1. Truy cập: `http://localhost:8000/admin/login`
2. Nhập thông tin:
   - Email: `admin@admin.com`
   - Password: `password`
3. Nhấn "Đăng Nhập"

### 2. Quản lý Bất Động Sản

Sau khi đăng nhập, bạn có thể:

#### ➕ Thêm BĐS mới:
- Nhấn nút "Thêm BĐS mới"
- Điền đầy đủ thông tin:
  - Tiêu đề *
  - Mô tả
  - Giá (VNĐ) *
  - Diện tích (m²)
  - Địa chỉ *
  - Thành phố *
  - Tỉnh/Quốc gia *
  - Số phòng ngủ *
  - Số phòng tắm *
  - Hình ảnh (upload file)
  - Hiển thị nổi bật (checkbox)
  - Kích hoạt (checkbox)
- Nhấn "Lưu"

#### ✏️ Chỉnh sửa BĐS:
- Nhấn nút icon bút chì (✏️) ở BĐS muốn sửa
- Cập nhật thông tin
- Nhấn "Cập nhật"

#### 🗑️ Xóa BĐS:
- Nhấn nút icon thùng rác (🗑️) ở BĐS muốn xóa
- Xác nhận xóa

#### 👁️ Xem trang chủ:
- Nhấn "Xem trang chủ" ở sidebar để xem giao diện người dùng

### 3. Đăng xuất

- Nhấn nút "Đăng xuất" ở sidebar dưới cùng

## 📊 Cấu Trúc Dữ Liệu

### Bảng Properties:
- `id`: ID
- `title`: Tiêu đề dự án
- `description`: Mô tả chi tiết
- `price`: Giá (VNĐ)
- `address`: Địa chỉ
- `city`: Thành phố/Phường
- `country`: Tỉnh/Quốc gia
- `bedrooms`: Số phòng ngủ
- `bathrooms`: Số phòng tắm
- `area`: Diện tích (m²)
- `image`: Đường dẫn hình ảnh
- `is_featured`: Hiển thị nổi bật (true/false)
- `is_active`: Kích hoạt (true/false)

## 🎯 Tính Năng

### ✅ Admin Panel:
- [x] Đăng nhập/Đăng xuất
- [x] Bảo mật với middleware
- [x] Quản lý CRUD đầy đủ
- [x] Upload hình ảnh
- [x] Đánh dấu BĐS nổi bật
- [x] Kích hoạt/Tạm dừng BĐS
- [x] Giao diện Bootstrap 5

### ✅ Frontend:
- [x] Hiển thị BĐS nổi bật
- [x] Slider BĐS
- [x] Định dạng giá tiền VNĐ
- [x] Responsive design

## 🔧 Lệnh Hữu Ích

### Tạo tài khoản admin mới:
```bash
php artisan db:seed --class=AdminUserSeeder
```

### Reset database và seed lại:
```bash
php artisan migrate:fresh --seed
php artisan db:seed --class=PropertySeeder
php artisan db:seed --class=AdminUserSeeder
```

### Xem danh sách routes:
```bash
php artisan route:list --path=admin
```

## 🛡️ Bảo Mật

- Tất cả routes admin được bảo vệ bởi middleware `admin`
- Session được regenerate sau khi đăng nhập
- CSRF protection được áp dụng cho tất cả form
- Password được hash với bcrypt

## 📝 Lưu Ý

1. **Thay đổi mật khẩu mặc định** sau khi cài đặt
2. **Upload hình ảnh** được lưu trong `storage/app/public/properties`
3. **Symbolic link** đã được tạo: `public/storage -> storage/app/public`
4. BĐS chỉ hiển thị ở trang chủ khi:
   - `is_featured = true`
   - `is_active = true`

## 🎨 Giao Diện

- **Admin Panel**: Bootstrap 5 + Bootstrap Icons
- **Frontend**: Template hiện có + dữ liệu động
- **Responsive**: Tương thích mobile, tablet, desktop

## 📧 Liên Hệ & Hỗ Trợ

Nếu cần thêm tính năng hoặc gặp lỗi, vui lòng liên hệ quản trị viên.

---

**Phiên bản:** 1.0.0  
**Ngày tạo:** 30/12/2025

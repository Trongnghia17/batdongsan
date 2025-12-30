# Hệ thống Đăng ký Tư vấn Khách hàng

## Tổng quan
Hệ thống cho phép khách hàng đăng ký nhận tư vấn từ website và admin có thể quản lý các yêu cầu này.

## Các tính năng đã triển khai

### 1. Frontend - Form đăng ký tư vấn
- **Popup tự động hiển thị** sau 1 giây khi người dùng truy cập trang chủ
- **Các trường thông tin:**
  - Họ và tên (bắt buộc)
  - Số điện thoại (bắt buộc, 10-11 số)
  - Email (tùy chọn)
  - Tiêu đề (tùy chọn)
  - Nhu cầu tư vấn (tùy chọn)
- **Gửi dữ liệu qua AJAX** - không cần reload trang
- **Validation** phía client và server
- **Lưu vào database** ngay lập tức

### 2. Backend - Quản lý Admin

#### Dashboard Tư vấn
- Truy cập: `/admin/consultations`
- **Thống kê nhanh:**
  - Số lượng yêu cầu chờ xử lý
  - Số lượng đang xử lý
  - Số lượng đã hoàn thành
  - Tổng số yêu cầu

#### Tính năng lọc và tìm kiếm
- Tìm kiếm theo: tên, số điện thoại, email, tiêu đề
- Lọc theo trạng thái:
  - **Chờ xử lý** (pending) - Màu vàng
  - **Đang xử lý** (processing) - Màu xanh dương
  - **Hoàn thành** (completed) - Màu xanh lá
  - **Đã hủy** (cancelled) - Màu xám

#### Chi tiết yêu cầu
- Xem đầy đủ thông tin khách hàng
- Gọi điện trực tiếp (click vào số điện thoại)
- Gửi email (nếu có)
- Xem nhu cầu tư vấn của khách hàng
- Xem ghi chú của admin (nếu có)

#### Cập nhật trạng thái
- Thay đổi trạng thái xử lý
- Thêm ghi chú nội bộ (khách hàng không thấy)
- Theo dõi thời gian tạo và cập nhật

#### Xóa yêu cầu
- Xóa các yêu cầu không cần thiết
- Có xác nhận trước khi xóa

## Cấu trúc Database

### Bảng: `consultations`
```sql
- id: bigint (primary key)
- name: varchar(255) - Họ tên
- phone: varchar(255) - Số điện thoại
- email: varchar(255) nullable - Email
- subject: varchar(255) nullable - Tiêu đề
- message: text nullable - Nhu cầu tư vấn
- status: enum - Trạng thái (pending, processing, completed, cancelled)
- admin_note: text nullable - Ghi chú của admin
- created_at: timestamp - Thời gian tạo
- updated_at: timestamp - Thời gian cập nhật
```

## File đã tạo/chỉnh sửa

### Models
- `app/Models/Consultation.php` - Model quản lý dữ liệu tư vấn

### Controllers
- `app/Http/Controllers/ConsultationController.php` - Xử lý form frontend
- `app/Http/Controllers/Admin/ConsultationController.php` - Quản lý admin

### Views
- `resources/views/admin/consultations/index.blade.php` - Danh sách yêu cầu
- `resources/views/admin/consultations/show.blade.php` - Chi tiết yêu cầu
- `resources/views/admin/consultations/edit.blade.php` - Cập nhật yêu cầu
- `resources/views/admin/layout.blade.php` - Thêm menu Tư vấn
- `resources/views/layouts/app.blade.php` - Thêm CSRF token
- `resources/views/home.blade.php` - Cập nhật AJAX submit

### Routes
- `routes/web.php` - Thêm routes cho consultation

### Database
- `database/migrations/2025_12_30_085055_create_consultations_table.php` - Migration
- `database/seeders/ConsultationSeeder.php` - Dữ liệu mẫu

## Hướng dẫn sử dụng

### 1. Truy cập trang Admin
```
URL: http://localhost:8000/admin/consultations
```

### 2. Xem danh sách yêu cầu tư vấn
- Nhìn thấy tất cả các yêu cầu với thông tin cơ bản
- Thống kê số lượng theo trạng thái
- Sắp xếp theo thời gian mới nhất

### 3. Tìm kiếm và lọc
- Nhập từ khóa vào ô tìm kiếm
- Chọn trạng thái cần lọc
- Nhấn "Lọc" để áp dụng

### 4. Xem chi tiết
- Click vào nút "Xem" (icon mắt)
- Xem đầy đủ thông tin khách hàng
- Click số điện thoại để gọi
- Click email để gửi mail

### 5. Cập nhật trạng thái
- Click nút "Cập nhật" (icon bút)
- Chọn trạng thái mới
- Thêm ghi chú nội bộ
- Nhấn "Cập nhật"

### 6. Xóa yêu cầu
- Click nút "Xóa" (icon thùng rác)
- Xác nhận xóa

## Test chức năng

### Test Frontend
1. Truy cập trang chủ: `http://localhost:8000`
2. Popup sẽ hiện sau 1 giây
3. Điền thông tin vào form
4. Nhấn "Gửi Thông Tin"
5. Kiểm tra thông báo thành công

### Test Backend
1. Đăng nhập admin
2. Truy cập `/admin/consultations`
3. Xem yêu cầu vừa tạo ở trên
4. Thử các chức năng: xem, sửa, xóa

## Quy trình xử lý yêu cầu đề xuất

1. **Chờ xử lý** (Pending)
   - Yêu cầu mới vào
   - Chưa liên hệ khách hàng

2. **Đang xử lý** (Processing)
   - Đã gọi điện/email cho khách
   - Đang tư vấn

3. **Hoàn thành** (Completed)
   - Đã tư vấn xong
   - Hoặc đã chốt deal

4. **Đã hủy** (Cancelled)
   - Khách không nghe máy
   - Khách không còn nhu cầu

## Ghi chú kỹ thuật

### Security
- Sử dụng CSRF token cho form
- Validation dữ liệu đầu vào
- Protected admin routes với middleware

### Performance
- Pagination cho danh sách (15 items/page)
- AJAX submit không reload trang
- Optimized queries

### UX/UI
- Badge màu sắc theo trạng thái
- Icons trực quan
- Responsive design
- Confirmation trước khi xóa

## Mở rộng trong tương lai

- [ ] Gửi email tự động khi có yêu cầu mới
- [ ] SMS notification cho admin
- [ ] Export danh sách ra Excel
- [ ] Dashboard với charts thống kê
- [ ] Assign yêu cầu cho nhân viên cụ thể
- [ ] Lịch sử thay đổi trạng thái
- [ ] Tích hợp CRM

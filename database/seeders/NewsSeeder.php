<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData = [
            [
                'title' => 'Ngân Tín Group khởi công dự án khu đô thị sinh thái tại Vĩnh Long',
                'category' => 'Bất Động Sản',
                'excerpt' => 'Tập đoàn Ngân Tín chính thức khởi công dự án khu đô thị sinh thái quy mô 50ha tại tỉnh Vĩnh Long, hứa hẹn tạo nên không gian sống xanh, hiện đại.',
                'content' => '<p>Ngày 15/12/2025, Tập đoàn Ngân Tín đã tổ chức lễ khởi công dự án khu đô thị sinh thái quy mô 50ha tại tỉnh Vĩnh Long. Đây là một trong những dự án trọng điểm của tập đoàn trong năm 2025.</p>
                <p>Dự án được đầu tư với tổng vốn hơn 2.000 tỷ đồng, bao gồm các khu nhà ở cao cấp, trung tâm thương mại, trường học, bệnh viện và các tiện ích hiện đại khác.</p>
                <p>Phát biểu tại buổi lễ, ông Nguyễn Văn A, Tổng Giám đốc Tập đoàn Ngân Tín cho biết: "Chúng tôi cam kết xây dựng một khu đô thị thực sự văn minh, hiện đại, đáp ứng nhu cầu sinh sống của người dân địa phương."</p>',
                'image' => 'images/hero_bg_1.jpg',
                'is_featured' => true,
                'views' => 150,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Ngân Tín Group mở rộng mạng lưới cửa hàng xăng dầu',
                'category' => 'Năng Lượng',
                'excerpt' => 'Trong quý IV/2025, Ngân Tín Group đã khai trương thêm 10 cửa hàng xăng dầu mới tại các tỉnh miền Tây.',
                'content' => '<p>Tập đoàn Ngân Tín tiếp tục mở rộng hoạt động kinh doanh xăng dầu với 10 cửa hàng mới được khai trương trong quý IV năm 2025.</p>
                <p>Các cửa hàng này được trang bị hệ thống hiện đại, đảm bảo chất lượng nhiên liệu và dịch vụ khách hàng tốt nhất.</p>
                <p>Ông Trần Văn B, Phó Tổng Giám đốc cho biết: "Chúng tôi đặt mục tiêu có 100 cửa hàng xăng dầu trên toàn quốc vào năm 2026."</p>',
                'image' => 'images/hero_bg_2.jpg',
                'is_featured' => true,
                'views' => 89,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Tập đoàn Ngân Tín ký kết hợp tác chiến lược với đối tác Nhật Bản',
                'category' => 'Năng Lượng Xanh',
                'excerpt' => 'Ngân Tín Group và tập đoàn SolarTech Nhật Bản ký kết hợp tác phát triển năng lượng mặt trời tại Việt Nam.',
                'content' => '<p>Ngày 20/12/2025, Tập đoàn Ngân Tín đã ký kết biên bản ghi nhớ hợp tác với tập đoàn SolarTech (Nhật Bản) trong lĩnh vực năng lượng mặt trời.</p>
                <p>Theo thỏa thuận, hai bên sẽ hợp tác đầu tư các dự án điện mặt trời quy mô lớn tại các tỉnh miền Trung và Tây Nguyên.</p>
                <p>Dự kiến tổng công suất các dự án lên tới 500MW, góp phần vào mục tiêu phát triển năng lượng xanh của Việt Nam.</p>',
                'image' => 'images/hero_bg_3.jpg',
                'is_featured' => true,
                'views' => 120,
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Khu logistics Ngân Tín chính thức đi vào hoạt động',
                'category' => 'Logistics',
                'excerpt' => 'Khu logistics hiện đại của Ngân Tín Group tại Bà Rịa - Vũng Tàu chính thức đi vào hoạt động.',
                'content' => '<p>Khu logistics Ngân Tín với diện tích 20ha tại Bà Rịa - Vũng Tàu đã chính thức đi vào hoạt động từ ngày 1/12/2025.</p>
                <p>Khu logistics được trang bị hệ thống kho bãi hiện đại, hệ thống quản lý tự động, đáp ứng nhu cầu lưu trữ và vận chuyển hàng hóa của các doanh nghiệp.</p>
                <p>Đây là bước tiến quan trọng trong chiến lược phát triển logistics của Tập đoàn Ngân Tín.</p>',
                'image' => 'images/hero_bg_4.jpg',
                'is_featured' => false,
                'views' => 75,
                'published_at' => now()->subDays(15),
            ],
            [
                'title' => 'Ngân Tín Group đạt doanh thu 5.000 tỷ đồng trong năm 2025',
                'category' => 'Kinh Doanh',
                'excerpt' => 'Năm 2025 đánh dấu mốc quan trọng khi Ngân Tín Group đạt doanh thu kỷ lục 5.000 tỷ đồng.',
                'content' => '<p>Theo báo cáo tài chính, Tập đoàn Ngân Tín đã đạt doanh thu 5.000 tỷ đồng trong năm 2025, tăng trưởng 35% so với năm 2024.</p>
                <p>Lợi nhuận sau thuế đạt 500 tỷ đồng, tăng 40% so với cùng kỳ.</p>
                <p>Kết quả này đến từ sự tăng trưởng mạnh mẽ ở tất cả các mảng kinh doanh: Bất động sản, xăng dầu, năng lượng xanh và logistics.</p>',
                'image' => 'images/hero_bg_5.jpg',
                'is_featured' => false,
                'views' => 200,
                'published_at' => now()->subDays(7),
            ],
            [
                'title' => 'Chương trình "Ngân Tín vì cộng đồng" trao 100 căn nhà tình thương',
                'category' => 'Cộng Đồng',
                'excerpt' => 'Tập đoàn Ngân Tín trao tặng 100 căn nhà tình thương cho hộ nghèo tại các tỉnh miền Tây.',
                'content' => '<p>Trong năm 2025, chương trình "Ngân Tín vì cộng đồng" đã trao tặng 100 căn nhà tình thương cho các hộ nghèo tại 10 tỉnh miền Tây.</p>
                <p>Mỗi căn nhà trị giá khoảng 50 triệu đồng, được xây dựng kiên cố, đảm bảo điều kiện sống an toàn cho các gia đình khó khăn.</p>
                <p>Đây là hoạt động thường niên của Tập đoàn Ngân Tín nhằm góp phần xóa đói giảm nghèo và phát triển cộng đồng.</p>',
                'image' => 'images/hero_bg_6.jpg',
                'is_featured' => false,
                'views' => 95,
                'published_at' => now()->subDays(12),
            ],
        ];

        foreach ($newsData as $data) {
            News::updateOrCreate(
                ['slug' => Str::slug($data['title'])],
                $data
            );
        }

        $this->command->info('Đã tạo/cập nhật ' . count($newsData) . ' tin tức thành công!');
    }
}

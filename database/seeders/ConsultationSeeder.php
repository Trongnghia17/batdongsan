<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Consultation;
use Faker\Factory as Faker;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        
        // Danh sách các chủ đề tư vấn phổ biến
        $subjects = [
            'Tư vấn mua căn hộ',
            'Tư vấn đầu tư đất nền',
            'Tư vấn mua nhà phố',
            'Tư vấn bán bất động sản',
            'Tư vấn pháp lý BĐS',
            'Tư vấn cho thuê căn hộ',
            'Tư vấn đầu tư shophouse',
            'Tư vấn mua biệt thự',
            'Tư vấn đầu tư condotel',
            'Tư vấn hợp đồng mua bán',
            null, // Một số khách không ghi tiêu đề
        ];
        
        // Danh sách khu vực
        $areas = [
            'Quận 1', 'Quận 2', 'Quận 3', 'Quận 4', 'Quận 5', 'Quận 7', 'Quận 9',
            'Thủ Đức', 'Bình Thạnh', 'Tân Bình', 'Gò Vấp', 'Phú Nhuận',
            'Bình Dương', 'Đồng Nai', 'Long An', 'Vũng Tàu', 'Bình Phước',
        ];
        
        // Danh sách loại hình BĐS
        $propertyTypes = [
            'căn hộ chung cư',
            'nhà phố',
            'đất nền',
            'biệt thự',
            'shophouse',
            'văn phòng',
            'condotel',
            'đất công nghiệp',
        ];
        
        // Tạo 50 khách hàng tư vấn
        for ($i = 1; $i <= 50; $i++) {
            $status = $faker->randomElement(['pending', 'processing', 'completed', 'cancelled']);
            $hasEmail = $faker->boolean(80); // 80% có email
            $hasSubject = $faker->boolean(70); // 70% có tiêu đề
            $area = $faker->randomElement($areas);
            $propertyType = $faker->randomElement($propertyTypes);
            $budget = $faker->randomElement(['dưới 2 tỷ', '2-3 tỷ', '3-5 tỷ', '5-10 tỷ', 'trên 10 tỷ']);
            
            // Tạo nội dung message đa dạng
            $messages = [
                "Tôi muốn tìm hiểu về {$propertyType} khu vực {$area}, ngân sách khoảng {$budget}. Vui lòng liên hệ tư vấn cho tôi.",
                "Em đang cần tư vấn về {$propertyType} ở {$area}. Anh chị có thể liên hệ giúp em được không?",
                "Gia đình tôi đang tìm {$propertyType} tại {$area} để ở, giá tầm {$budget}. Mong được tư vấn.",
                "Tôi quan tâm đến các dự án {$propertyType} ở khu vực {$area}. Cho tôi xin thông tin chi tiết.",
                "Muốn đầu tư {$propertyType} tại {$area}, ngân sách {$budget}. Nhờ tư vấn giúp.",
                "Cần tư vấn pháp lý về thủ tục mua bán {$propertyType}. Tôi đang có nhu cầu mua ở {$area}.",
                "Tôi có {$propertyType} ở {$area} muốn bán, giá khoảng {$budget}. Vui lòng liên hệ hỗ trợ.",
                "Đang tìm {$propertyType} để cho thuê tại {$area}. Mong được tư vấn về các dự án phù hợp.",
            ];
            
            $message = $faker->randomElement($messages);
            
            // Tạo admin note dựa vào status
            $adminNote = null;
            if ($status === 'processing') {
                $adminNotes = [
                    "Đã gọi điện tư vấn, khách hàng quan tâm. Hẹn gặp mặt tuần sau.",
                    "Đã gửi thông tin dự án qua email. Khách hàng đang xem xét.",
                    "Khách hàng yêu cầu xem thêm 2-3 dự án khác. Đang chuẩn bị hồ sơ.",
                    "Đã tư vấn qua điện thoại, khách hàng muốn đặt lịch xem nhà.",
                    "Khách hàng quan tâm, đang chờ phản hồi ngân sách cụ thể.",
                ];
                $adminNote = $faker->randomElement($adminNotes);
            } elseif ($status === 'completed') {
                $adminNotes = [
                    "Đã tư vấn xong, khách hàng hài lòng và đã đặt cọc.",
                    "Hoàn thành tư vấn. Khách hàng đã ký hợp đồng mua BĐS.",
                    "Tư vấn thành công. Khách hàng cảm ơn và giới thiệu thêm bạn bè.",
                    "Đã hoàn tất hỗ trợ pháp lý. Giao dịch thành công.",
                    "Khách hàng đã mua căn theo tư vấn. Rất hài lòng về dịch vụ.",
                ];
                $adminNote = $faker->randomElement($adminNotes);
            } elseif ($status === 'cancelled') {
                $adminNotes = [
                    "Khách hàng không nghe máy nhiều lần.",
                    "Khách hàng đã mua BĐS ở nơi khác.",
                    "Không liên lạc được sau 3 lần gọi.",
                    "Khách hàng thông báo tạm hoãn kế hoạch mua.",
                    "Ngân sách không phù hợp với các dự án hiện có.",
                ];
                $adminNote = $faker->randomElement($adminNotes);
            }
            
            Consultation::create([
                'name' => $faker->name,
                'phone' => '0' . $faker->numerify('#########'),
                'email' => $hasEmail ? strtolower($faker->firstName) . $faker->numberBetween(1, 999) . '@gmail.com' : null,
                'subject' => $hasSubject ? $faker->randomElement($subjects) : null,
                'message' => $message,
                'status' => $status,
                'admin_note' => $adminNote,
                'created_at' => $faker->dateTimeBetween('-3 months', 'now'),
            ]);
        }
        
        $this->command->info('Đã tạo 50 khách hàng tư vấn giả lập thành công!');
    }
}

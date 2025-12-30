<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'title' => 'KHU DÂN CƯ LIỀN KỀ KHU CÔNG NGHIỆP ĐỒNG XOÀI I',
                'description' => 'Dự án Khu Dân Cư liền kề Khu Công nghiệp Đồng Xoài I tọa lạc tại con đường huyết mạch Quốc lộ 14, thuộc phường Đồng Xoài, tỉnh Đồng Nai. Dự án là tâm điểm kết nối giao thương giữa các tỉnh Đông Nam Bộ, Tây Nguyên và Campuchia. Từ vị trí này di chuyển đến TP Hồ Chí Minh, Tây Ninh,… chỉ mất khoảng 60 phút nhờ mạng lưới giao thông khá đồng bộ và hiện đại.',
                'price' => 2500000000000,
                'address' => 'Quốc lộ 14',
                'city' => 'Phường Đồng Xoài',
                'country' => 'Đồng Nai',
                'project_type' => 'Khu Dân Cư',
                'total_products' => 934,
                'delivery_time' => 'Năm 2025',
                'ownership_duration' => 'Lâu dài',
                'facilities' => 'Trường học; Trung tâm y tế; Tổ hợp vui chơi cho trẻ em; Khu vui chơi, giải trí cho cư dân; Công viên cây xanh; Trung tâm thương mại',
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 173000,
                'image' => 'dongxoai.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'KHU DU LỊCH NGHỈ DƯỠNG BIỂN QUỐC TẾ BÃI XÉP',
                'description' => 'Dự án Khu du lịch nghỉ dưỡng biển quốc tế Bãi Xép tiêu chuẩn 5 sao có vị trí tại Km17+475 đến km17+920, thuộc KV1, phường Quy Nhơn, tỉnh Gia Lai. Dự án nằm ngay bãi biển hoang sơ và Làng chài đầy nét văn hóa biển Quy Nhơn. Dự án được hình thành sẽ tạo nên một khu du lịch nghỉ dưỡng cao cấp, một loại hình nghỉ dưỡng mới hấp dẫn, gần gũi, đặc sắc với thiên nhiên, đồi núi, biển và được áp dụng nhiều công nghệ hiện đại, tiết kiệm năng lượng.',
                'price' => 1000000000000,
                'address' => 'Km17+475 đến km17+920, KV1',
                'city' => 'Phường Quy Nhơn',
                'country' => 'Gia Lai',
                'project_type' => 'Du lịch nghỉ dưỡng',
                'total_products' => null,
                'delivery_time' => 'Năm 2025',
                'ownership_duration' => '50 năm',
                'facilities' => 'Resort 5 sao; Nhà hàng; Spa; Bãi biển riêng; Hồ bơi; Khu vui chơi; Trung tâm thể thao',
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 141000,
                'image' => 'baixep.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'KHU DÂN CƯ 05 THUỘC ĐIỂM SỐ 3, NHƠN HỘI',
                'description' => 'Dự án Khu Dân cư 05 thuộc Điểm số 3, quỹ đất dọc Đường trục Khu kinh tế nối dài thuộc Khu Đô thị Cát Tiến, xã Cát Tiến, có vị trí độc đáo và địa hình đẹp tại cửa ngõ vào Khu kinh tế Nhơn Hội theo hướng từ Sân bay Phù Cát. Dự án với hạ tầng kỹ thuật hiện đại, đẳng cấp, tiện nghi và đầy đủ dịch vụ tiện ích.',
                'price' => 500000000000,
                'address' => 'Đường trục Khu kinh tế nối dài',
                'city' => 'Xã Cát Tiến',
                'country' => 'Tỉnh Gia Lai',
                'project_type' => 'Khu Dân Cư',
                'total_products' => 193,
                'delivery_time' => 'Năm 2027',
                'ownership_duration' => 'Lâu dài',
                'facilities' => 'Công viên; Trường học; Khu thể dục thể thao; Hạ tầng kỹ thuật hiện đại',
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 58000,
                'image' => 'nhonhoi.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'KHU ĐÔ THỊ TÂY NAM XÃ NHƠN LÝ (KỲ CO)',
                'description' => 'Dự án được quy hoạch với diện tích hơn 21ha có mật độ xây dựng thấp chỉ khoảng 32% với thời hạn sử dụng đất ở là lâu dài. Tổng mức đầu tư của dự án là gần 3.000 tỷ đồng. Mục tiêu: Xây dựng khu đô thị nhằm khai thác thế mạnh cảnh quan khu vực phát triển dịch vụ du lịch, tạo không gian ở sinh thái hiện đại cho người dân.',
                'price' => 3000000000000,
                'address' => 'Tây Nam xã Nhơn Lý',
                'city' => 'Phường Quy Nhơn Đông',
                'country' => 'Tỉnh Gia Lai',
                'project_type' => 'Khu Đô Thị',
                'total_products' => 635,
                'delivery_time' => 'Đang tiến hành',
                'ownership_duration' => 'Lâu dài',
                'facilities' => 'Nhà ở liền kề thương mại; Biệt thự; Chung cư xã hội; Khách sạn 9 tầng; Công viên; Khu dịch vụ',
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 213000,
                'image' => 'nhonly.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'KHU ĐÔ THỊ NGUYỄN TRỌNG HỢP',
                'description' => 'Dự án KĐT Nguyễn Trọng Hợp với quy mô 22,7ha, toạ lạc tại Phường Gò Công, tỉnh Đồng Tháp. Tổng mức đầu tư khoảng 2.700 tỷ đồng. Mục tiêu: Phát triển hạ tầng đô thị, thu hút đầu tư, góp phần xây dựng Đồng Tháp phát triển hiện đại.',
                'price' => 2700000000000,
                'address' => 'Phường Gò Công',
                'city' => 'Phường Gò Công',
                'country' => 'Tỉnh Đồng Tháp',
                'project_type' => 'Khu Đô Thị',
                'total_products' => null,
                'delivery_time' => 'Năm 2027',
                'ownership_duration' => 'Lâu dài',
                'facilities' => 'Nhà ở thương mại; Nhà liền kề; Biệt thự; Khối thương mại dịch vụ; Công trình giáo dục; Nhà văn hóa; Công viên cây xanh',
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 227000,
                'image' => 'tronghop.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}


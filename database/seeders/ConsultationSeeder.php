<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Consultation;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $consultations = [
            [
                'name' => 'Nguyễn Văn An',
                'phone' => '0901234567',
                'email' => 'nguyenvanan@gmail.com',
                'subject' => 'Tư vấn mua căn hộ',
                'message' => 'Tôi muốn tìm hiểu về các dự án căn hộ khu vực quận 2, giá từ 2-3 tỷ.',
                'status' => 'pending',
            ],
            [
                'name' => 'Trần Thị Bình',
                'phone' => '0912345678',
                'email' => 'tranthibinh@yahoo.com',
                'subject' => 'Tư vấn đầu tư đất nền',
                'message' => 'Tôi đang tìm đất nền để đầu tư dài hạn, vui lòng tư vấn.',
                'status' => 'processing',
                'admin_note' => 'Đã gọi điện tư vấn, khách hàng quan tâm dự án ở Bình Dương.',
            ],
            [
                'name' => 'Lê Hoàng Nam',
                'phone' => '0923456789',
                'email' => null,
                'subject' => null,
                'message' => 'Cần tư vấn về các loại hình bất động sản hiện nay.',
                'status' => 'completed',
                'admin_note' => 'Đã tư vấn xong, khách hàng hài lòng.',
            ],
            [
                'name' => 'Phạm Thu Hương',
                'phone' => '0934567890',
                'email' => 'phamthuhuong@gmail.com',
                'subject' => 'Muốn bán nhà',
                'message' => 'Tôi có căn nhà ở quận 7 muốn bán, vui lòng liên hệ tư vấn.',
                'status' => 'processing',
            ],
            [
                'name' => 'Võ Minh Tuấn',
                'phone' => '0945678901',
                'email' => 'vominhtuan@hotmail.com',
                'subject' => 'Tư vấn pháp lý',
                'message' => 'Tôi cần tư vấn về thủ tục mua bán nhà đất.',
                'status' => 'cancelled',
                'admin_note' => 'Khách hàng không nghe máy nhiều lần.',
            ],
        ];

        foreach ($consultations as $consultation) {
            Consultation::create($consultation);
        }
    }
}

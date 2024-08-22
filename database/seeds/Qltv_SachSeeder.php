<?php

use Illuminate\Database\Seeder;

class Qltv_SachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mượn thư viện faker để tạo dữ liệu ảo
        $faker =Faker\Factory::create('vi_VN'); //location ISO
        $list = [];
        $dstheloai = DB::table('qltv_theloai')->pluck('id'); //SELECT id From qltv_theloai
        $dsnxb = DB::table('qltv_nxb')->pluck('id'); //SELECT id From qltv_nxb
        $types = ["ĐẮC NHÂN TÂM", " ĐỜI THAY ĐỔI KHI CHÚNG TA THAY ĐỔI", "CÁCH NGHĨ ĐỂ THÀNH CÔNG", "7 THÓI QUEN ĐỂ THÀNH ĐẠT", "CUỘC SỐNG KHÔNG GIỚI HẠN", "NGƯỜI GIÀU CÓ NHẤT THÀNH BABYLON", "QUẲNG GÁNH LO ĐI MÀ VUI SỐNG", " BỘ SÁCH HẠT GIỐNG CHO TÂM HỒN", "TÌM KIẾM SỰ KHÔN NGOAN TỪ DARWIN ĐẾN MUNGER", "CHÂM NGÔN ĐẠO ĐỨC CỦA PUBLIUS SYRUS", "NHÀ GIẢ KIM", "TỐC ĐỘ CỦA NIỀM TIN", "THÓI QUEN THỨ 8", "ĐÁNH THỨC CON NGƯỜI PHI THƯỜNG TRONG BẠN", "LÀM CHỦ TƯ DUY THAY ĐỔI VẬN MỆNH"];
        $types1 = ["Hiếu", "Khang", "Hùng", "Tuấn", "Giang", "Anh", "Hà", "Kiều", "Phượng"];
        sort($types);
        for ($i=1; $i <= 10; $i++) {
            array_push($list, [
                'id'        => $i,
                'masach'     => $faker->numerify('Sach_######'),
                'tensach'    => $types[$i-1],
                'tentacgia'  =>$faker->randomElement($types1),
                'soluong'       =>$faker->numberBetween(1, 100),
                'trangthaisach'      =>$faker->numberBetween(1, 2),
                'anh'       =>$faker->imageUrl(300, 300),

                //khoas ngoai
                'theloai_id'       => $faker->randomElement($dstheloai),
                'nxb_id'       => $faker->randomElement($dsnxb)
            ]);
        }
        DB::table('qltv_sach')->insert($list);
    }
}

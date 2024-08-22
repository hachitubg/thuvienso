<?php

use Illuminate\Database\Seeder;

class Qltv_TheloaiSeeder extends Seeder
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
        $types = ["Chính trị – pháp luật", "Khoa học công nghệ – Kinh tế", "Văn hóa xã hội – Lịch sử", "Văn học nghệ thuật", "Giáo trình", "Truyện, tiểu thuyết", "Tâm lý, tâm linh, tôn giáo", "Sách thiếu nhi", "Thể loại khác"];
        sort($types);
        $today = new DateTime('2019-01-01 08:00:00');
        for ($i=1; $i <= 9; $i++) {
            array_push($list, [
                'id'      => $i,
                'matheloai'     => 'TLoai'.$i,
                'tentheloai'     => $types[$i-1]
            ]);
        }
        DB::table('qltv_theloai')->insert($list);
    }
}

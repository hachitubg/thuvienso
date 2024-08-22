<?php

use Illuminate\Database\Seeder;

class Qltv_KhoaSeeder extends Seeder
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
        $types = ["Khoa CNTT & TT", "Khoa Sư Phạm", "Khoa Kinh Tế", "Khoa Công Nghệ", "Khoa Môi Trường", "Khoa Khoa Học Chính Trị", "Khoa Luật", "Khoa Khoa Học Xã Hội", "Khoa Nông Nghiệp", "Khoa Khoa Học Tự Nhiên", "Khoa Thủy Sản"];
        sort($types);
        $today = new DateTime('2019-01-01 08:00:00');
        for ($i=1; $i <= 11; $i++) {
            array_push($list, [
                'id'        => $i,
                'makhoa'     => 'Khoa'.$i,
                'tenkhoa'    => $types[$i-1]
            ]);
        }
        DB::table('qltv_khoa')->insert($list);
    }
}

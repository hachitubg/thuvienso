<?php

use Illuminate\Database\Seeder;

class Qltv_NganhSeeder extends Seeder
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
        $dsKhoa = DB::table('qltv_khoa')->pluck('id'); //SELECT id From qltv_khoa
        $types = ["Khoa học máy tính", "Mạng máy tính và truyền thông dữ liệu", "Kỹ thuật phần mềm", "Hệ thống thông tin", "Sư phạm Sinh học", "Sư phạm Hóa học", "Sư phạm Địa lý", "Sư phạm Ngữ văn", "Sư phạm Lịch sử", "Giáo dục Tiểu học"];
        $today = new DateTime('2019-01-01 08:00:00');
        for ($i=1; $i <= 5; $i++) {
            array_push($list, [
                'id'        => $i,
                'manganh'     => 'Nganh'.$i,
                'tennganh'    => $types[$i-1]
            ]);
        }
        DB::table('qltv_nganh')->insert($list);
    }
}

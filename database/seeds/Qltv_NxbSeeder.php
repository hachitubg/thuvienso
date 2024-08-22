<?php

use Illuminate\Database\Seeder;

class Qltv_NxbSeeder extends Seeder
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
        $types = ["Chuyên ngành Kim Đồng", "Chuyên ngành Trẻ", "Chuyên ngành Tổng hợp thành phố Hồ Chí Minh", "Chuyên ngành chính trị quốc gia", "Chuyên ngành giáo dục", "Chuyên ngành Hội Nhà văn", "Chuyên ngành Tư pháp", "Chuyên ngành thông tin và truyền thông", "Chuyên ngành lao động", "Chuyên ngành giao thông vận tải"];
        sort($types);
        $today = new DateTime('2019-01-01 08:00:00');
        for ($i=1; $i <= 5; $i++) {
            array_push($list, [
                'id'        => $i,
                'manxb'     => 'NXB'.$i,
                'tennxb'    => $types[$i-1]
            ]);
        }
        DB::table('qltv_nxb')->insert($list);
    }
}

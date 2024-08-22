<?php

use Illuminate\Database\Seeder;

class Qltv_MuonsachSeeder extends Seeder
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
        $dsdocgia = DB::table('qltv_docgia')->pluck('id'); //SELECT id From qltv_docgia
        $dssach = DB::table('qltv_sach')->pluck('id'); //SELECT id From qltv_sach
        $dsthuthu = DB::table('qltv_thuthu')->pluck('id'); //SELECT id From qltv_thuthu
        for ($i=1; $i <= 10; $i++) {
            array_push($list, [
                'id'            => $i,
                'mamuon'        => $faker->numerify('MM_####'),
                'ngaymuon'      => $faker->dateTimeThisYear(),
                'hantra'        =>$faker->numberBetween(1, 30),
                'soluong'       => $faker->numberBetween(1, 20),
                'ngaytra'       =>$faker->dateTimeThisYear(),
                'tinhtrang'     =>$faker->numberBetween(0, 2),

                //khoas ngoai
                'docgia_id'       => $faker->randomElement($dsdocgia), //chọn ngẫu nhiên id of bảng qltv_docgia
                'sach_id'       => $faker->randomElement($dssach),
                'thuthu_id'       => $faker->randomElement($dsthuthu)
            ]);
        }
        DB::table('qltv_Muonsach')->insert($list);
    }
}

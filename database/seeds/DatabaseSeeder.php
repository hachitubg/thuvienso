<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //dùng để gọi seeder tạo dữ liệu ảo
        $this->call(Qltv_TheloaiSeeder::class);
        $this->call(Qltv_NxbSeeder::class);
        $this->call(Qltv_SachSeeder::class);
        $this->call(Qltv_KhoaSeeder::class);
        $this->call(Qltv_NganhSeeder::class);
        $this->call(Qltv_DocgiaSeeder::class);
        $this->call(Qltv_ThuthuSeeder::class);
        $this->call(Qltv_MuonsachSeeder::class);
    }
}

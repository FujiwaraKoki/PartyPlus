<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $param = [
            'last_name' => 'テスト1', 
            'first_name' => '太郎', 
            'last_name_fonetic' => 'てすと１', 
            'first_name_fonetic' => 'たろう', 
            'age' => 21,
            'mail' => 'test1@mail', 
            'phone' => '08000000001', 
            'postal_number' => '1234567', 
            'prefecture' => '東京都', 
            'city1' => 'テスト1市テスト1区テスト1町', 
            'city2' => '1丁目1番地', 
            'buildings' => 'テスト建造物101', 
            'birth_year' => '1991', 
            'work_style' => '会社員', 
            'job' => '営業職', 
            'reg_dt' => '2023-06-26 17:01', 
            'update_dt' => '2023-06-26 17:01', 
            'remarks' => 'テスト1', 
            'person_type' => 1
        ];
        DB::table('customers')->insert($param);
        
        $param = [
            'last_name' => 'テスト2', 
            'first_name' => '次郎', 
            'last_name_fonetic' => 'てすと２', 
            'first_name_fonetic' => 'じろう', 
            'age' => 22,
            'mail' => 'test2@mail', 
            'phone' => '08000000002', 
            'postal_number' => '1234568', 
            'prefecture' => '京都府', 
            'city1' => 'テスト2市テスト2区テスト2町', 
            'city2' => '2丁目2番地', 
            'buildings' => 'テスト建造物102', 
            'birth_year' => '1992', 
            'work_style' => '自営業', 
            'job' => 'デザイナー', 
            'reg_dt' => '2023-06-26 17:02', 
            'update_dt' => '2023-06-26 17:02', 
            'remarks' => 'テスト1', 
            'person_type' => 2
        ];
        DB::table('customers')->insert($param);
    }
}

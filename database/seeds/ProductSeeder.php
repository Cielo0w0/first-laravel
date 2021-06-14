<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


// 改名時記得也要改這!
// 但直接重建會比較保險
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //資料表內資料清空指令
        DB::table('products')->truncate();

        for ($i=0; $i < 30; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'price' => rand(100,2000),
                'discount' => rand(0,10)/10,
                'discript' => Str::random(16),
                'img' => Str::random(16),
            ]);
        }
    }
}

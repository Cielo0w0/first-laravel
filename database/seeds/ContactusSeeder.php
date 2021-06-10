<?php

// 記得要右鍵import class
// 綠色的都是外部引用的東西，所以如果有紅色底線，就要注意有沒有引用
use App\Contactus;
use Illuminate\Database\Seeder;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //要先清掉資料表的資料
        Contactus::truncate();
        // 執行工廠(該工廠綁的model::class,要執行幾次工廠)->create();
        factory(Contactus::class,30)->create();
    }
}

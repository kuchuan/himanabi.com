<?php

use Illuminate\Database\Seeder;

class LikeitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Likeit::class, 20)->create(); // 20件のデータを作成
    }
}

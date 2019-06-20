<?php

use Illuminate\Database\Seeder;

class Room_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Room_user::class, 40)->create(); // 20件のデータを作成
    }
}

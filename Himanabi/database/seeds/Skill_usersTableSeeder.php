<?php

use Illuminate\Database\Seeder;

class Skill_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Skill_user::class, 30)->create(); // 30件のデータを作成
    }
}

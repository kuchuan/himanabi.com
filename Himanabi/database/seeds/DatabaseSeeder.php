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
            // $this->call(SkillsTableSeeder::class);
            // $this->call(RoomsTableSeeder::class);
            // $this->call(LikeitsTableSeeder::class);
            // $this->call(MessagesTableSeeder::class);
            $this->call(UsersTableSeeder::class);
            $this->call(SkillsTableSeeder::class);
            $this->call(Room_usersTableSeeder::class);
            $this->call(Skill_usersTableSeeder::class);
            $this->call(MessagesTableSeeder::class);
	}
}
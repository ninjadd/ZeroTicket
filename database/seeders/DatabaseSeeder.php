<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
            TicketSeeder::class,
            StatusSeeder::class,
            PrioritySeeder::class,
            CategorySeeder::class,
            DepartmentSeeder::class,
            ThreadSeeder::class,
            ReplySeeder::class,
            RoleSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        roles::truncate();

        roles::create(['name'=>'admin']);
        roles::create(['name'=>'Author']);
        roles::create(['name'=>'user']);
    }
}

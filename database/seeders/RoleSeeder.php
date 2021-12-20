<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'USER'],
            ['name' => 'OPERATOR'],
            ['name' => 'ADMIN'],
        ];
        DB::table('roles')->insert($roles);
    }
}

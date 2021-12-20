<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Constants\Roles;

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
            ['id' => 1, 'name' => Roles::$USER_ROLE],
            ['id' => 2, 'name' => Roles::$OPERATOR_ROLE],
            ['id' => 3, 'name' => Roles::$ADMIN_ROLE],
        ];
        DB::table('roles')->insert($roles);
    }
}

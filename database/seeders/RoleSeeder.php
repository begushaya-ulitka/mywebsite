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
            ['id' => Roles::$USER_ROLE_ID, 'name' => Roles::$USER_ROLE],
            ['id' => Roles::$OPERATOR_ROLE_ID, 'name' => Roles::$OPERATOR_ROLE],
            ['id' => ROles::$ADMIN_ROLE_ID, 'name' => Roles::$ADMIN_ROLE],
        ];
        DB::table('roles')->insert($roles);
    }
}

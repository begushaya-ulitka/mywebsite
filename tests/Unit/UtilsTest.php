<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Constants\Roles;
use Illuminate\Support\Facades\Auth;

class UtilsTest extends TestCase
{
    public function test_operrole()
    {
        $userRoleId = 1;
        $this->assertTrue(Roles::getUserRoleId() === $userRoleId);
    }
}

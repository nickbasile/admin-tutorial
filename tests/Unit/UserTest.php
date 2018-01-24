<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_default_user_is_not_an_admin()
    {
        $user = factory(User::class)->create();

        $this->assertFalse($user->isAdmin());
    }

    /** @test */
    public function an_admin_user_is_an_admin()
    {
        $admin = factory(User::class)
            ->states('admin')
            ->create();

        $this->assertTrue($admin->isAdmin());
    }
}

<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    const BASE_URL = '/api/v1';
    const REGISTRATIONS = '/registrations';
    const LOGIN = '/login';
    const PRODUCTS = '/products';

    protected function signIn()
    {
        $user = factory('App\Models\User')->create();
        $this->actingAs($user);
        return $user;
    }

    protected function withErrors()
    {
        $this->withoutExceptionHandling();
    }
}

<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class logoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')
            ->assertSee('Email')
            ->assertSee('Password')
            ->type('email',  'hafizhtest@gmail.com')
            ->type('password', '1202223231')
            ->press('LOG IN')
            ->waitFor('#click-dropdown')
            ->click('#click-dropdown')
            ->clickLink('Log Out');
        });
    }
}
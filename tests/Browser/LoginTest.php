<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Login
     */
    public function testLogin(): void
    {
        $this->browse(callback: function (Browser $browser): void {
            $browser->visit(url:'/')
                    ->clickLink(link: 'Log in') //Mengklik link Log in
                    ->assertPathIs(path:'/login') //Memastikan path adalah '/login'
                    ->type(field: 'email', value: 'hafizhtest@gmail.com') //Mengisi field email dengan hafizhtest@gmail.com'
                    ->type(field: 'password', value: '1202223231') //Mengisi field password dengan '1202223231'
                    ->press('LOG IN') //Menekan tombol LOGIN
                    ->assertPathIs(path: '/dashboard'); //Memastikan path adalah '/dashboard'
                    
        });
    }
}

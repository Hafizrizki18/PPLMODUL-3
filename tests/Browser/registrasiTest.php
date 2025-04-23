<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class registrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Registrasi
     */
    public function testregistrasi(): void
    {
        $this->browse(callback: function (Browser $browser): void {

            $browser->visit(url: '/') //Mengarahkan testing ke url
                    ->clickLink(link: 'Register') //Mengklik link register
                    ->assertPathIs(path:'/register') //Memastikan path adalah '/register'
                    ->type(field: 'name', value: 'hafizh') //Mengisi field name dengan 'hafizh'
                    ->type(field: 'email', value: 'hafizhtest@gmail.com') //Mengisi field email dengan hafizhtest@gmail.com'
                    ->type(field: 'password', value: '1202223231') //Mengisi field password dengan '1202223231'
                    ->type(field: 'password_confirmation', value: '1202223231') //Mengisi field password_confirmation dengan '1202223231'
                    ->press('REGISTER') //Menekan tombol register
                    ->assertPathIs(path: '/dashboard'); //Memastikan path adalah '/dashboard'

        });
    }
}

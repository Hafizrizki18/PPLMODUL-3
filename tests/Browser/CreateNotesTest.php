<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group CreateNotes
     */
    public function testCreatNotes(): void
    {
        $this->browse(callback: function (Browser $browser): void {
            $browser->visit('/')
            ->clickLink(link: 'Log in') //Mengklik link Log in
                    ->assertPathIs(path:'/login') //Memastikan path adalah '/login'
                    ->type(field: 'email', value: 'hafizhtest@gmail.com') //Mengisi field email dengan hafizhtest@gmail.com'
                    ->type(field: 'password', value: '1202223231') //Mengisi field password dengan '1202223231'
                    ->press('LOG IN') //Menekan tombol LOGIN
                    ->assertPathIs(path: '/dashboard') //Memastikan path adalah '/dashboard'
                    ->clicklink(link: 'Create Notes') //Mengklik link Create Notes
                    ->assertPathIs(path: '/notes') //Memastikan path adalah '/notes'
                    ->clinklink(link: 'Create Notes') //Mengklik link Create Notes
                    ->assertPathIs(path: 'create-notes') //Memastikan path adalah '/create-notes'
                    ->type(field: 'title', value: 'Judul Notes') //Mengisi field title dengan 'Judul Notes'
                    ->type(field: 'description', value: 'Deskripsi Notes') //Mengisi field description dengan 'Deskripsi Notes'
                    ->press('Create') //Menekan tombol Create
                    ->assertPathIs(path: '/notes') //Memastikan path adalah '/notes'
                    ->assertSee('Notes created successfully'); //Memastikan ada pesan 'Notes created successfully'

                    
        });
    }
}

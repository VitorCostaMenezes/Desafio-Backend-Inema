<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\Client;

class AddClientTest extends DuskTestCase
{
    /** @test */
    public function check_if_add_client_is_correct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/new_client')
                    ->assertSee('Informações pessoais:');
        });
    }

    /** @test */
    public function check_if_add_client_function_is_working()

    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/new_client')
                    ->type('name', "Vitor Menezes" )
                    ->type('email', "usuário@teste.com" )
                    ->type('telefone', "71332468717" )
                    ->type('rua', "Rua das Pedrinhas" )
                    ->type('numero', "351" )
                    ->type('bairro', "Platafrma" )
                    ->type('cidade', "Salvador" )
                    ->select('estado', "Bahia" )
                    ->press('Adicionar Cliente')
                    ->assertPathIs('/new_client')
                    ->visit('list_clients');
        });
    }

    /** @test */
    public function check_if_list_clients_is_correct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/list_clients')
                    ->assertSee('Clientes Cadastrados');
        });
    }

     /** @test */
     public function check_if_update_client_function_is_working()
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('/client/edit/1')
                    ->type('name', "Usuário Teste" )
                    ->type('email', "usuário@teste.com" )
                    ->type('telefone', "71332468717" )
                    ->type('rua', "Rua das Pedrinhas" )
                    ->type('numero', "351" )
                    ->type('bairro', "Platafrma" )
                    ->type('cidade', "Salvador" )
                    ->select('estado', "Bahia" )
                    ->press('Atualizar Cliente')
                    ->assertPathIs('/client/edit/1')
                    ->visit('list_clients')
                    ->assertSee('Clientes Cadastrados');
         });
     }

}

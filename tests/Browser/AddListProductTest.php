<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\Product;

class AddListProductTest extends DuskTestCase
{
        /** @test */
        public function check_if_new_product_is_correct()
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('/new_product')
                        ->assertSee('Adicionar Produtos');
            });
        }
       /** @test */
       public function check_if_add_product_function_is_working()
   
       {
            $this->browse(function (Browser $browser) {
                $browser->visit('/new_product')
                    ->type('name', 'Notbook Teste 2' )
                    ->attach('image','public/img/logo_inema.png')
                    ->type('amount', '20' )
                    ->type('valor', '4000' )
                    ->type('description', "Teste de descrição" )
                    ->press('Adicionar Produto')
                    ->visit('/list_products')
                    ->assertSee('Produtos Cadastrados');
            });
       }
   
       /** @test */
       public function check_if_list_product_is_correct()
       {
           $this->browse(function (Browser $browser) {
               $browser->visit('/list_clients')
                       ->assertSee('Clientes Cadastrados');
           });
       }

        /** @test */
        public function check_if_update_amount_product_function_is_working()
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('/estoque/edit/1')
                       ->type('amount', "50" )
                       ->press('Atualizar Estoque')
                       ->visit('/list_products')
                       ->assertSee('Produtos Cadastrados');
                       
            });
        }
}

<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddListOrderTest extends DuskTestCase
{
     /** @test */
     public function check_if_add_order_function_is_working()
   
     {
          $this->browse(function (Browser $browser) {
              $browser->visit('/new_order')
                  ->check('product_id[]')
                  ->type('amount[]', "1" )
                  ->press('Gerar Pedido')
                  ->visit('/list_orders')
                  ->assertSee('Pedidos');
          });
     }
 
     /** @test */
     public function check_if_list_order_is_correct()
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('/list_orders')
                     ->assertSee('Pedidos');
         });
     }

      /** @test */
      public function check_if_update_amount_product_function_is_working()
      {
          $this->browse(function (Browser $browser) {
              $browser->visit('/order/2')
                     ->assertSee('Detalhes do Pedido');
                     
          });
      }
}

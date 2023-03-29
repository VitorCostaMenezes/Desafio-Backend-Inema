<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Order;

class OrderTest extends TestCase
{
     /** @test */
     public function check_if_Order_columns_is_correct()
     {
         $orders = new Order;
         $expected = [ 
            'client_id', 
            'valor'
         ];
 
         $arrayCompared = array_diff($expected, $orders->getFillable());
 
         $this->assertEquals(0, count($arrayCompared));
         
     }
}

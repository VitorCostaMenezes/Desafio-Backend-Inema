<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Product;


class ProductTest extends TestCase
{
     /** @test */
     public function check_if_Products_columns_is_correct()
     {
         $products = new Product;
         $expected = [ 
            'name',
            'image',
            'amount',
            'valor'
         ];
 
         $arrayCompared = array_diff($expected, $products->getFillable());
 
         $this->assertEquals(0, count($arrayCompared));
         
     }
}

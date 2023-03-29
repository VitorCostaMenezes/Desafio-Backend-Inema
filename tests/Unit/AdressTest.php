<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Adress;


class AdressTest extends TestCase
{
    /** @test */
    public function check_if_adress_columns_is_correct()
    {
        $adress = new Adress;

        $expected = [ 
            'rua', 
            'bairro',
            'cidade',
            'numero',
            'estado',
            'client_id'
        ];

        $arrayCompared = array_diff($expected, $adress->getFillable());

        $this->assertEquals(0, count($arrayCompared));
        
    }
}

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Client;

class ClientTest extends TestCase
{
  
    /** @test */
    public function check_if_client_columns_is_correct()
    {
        $clients = new Client;

        $expected = [ 
            
            'name',
            'email',
            'telefone'
        ];

        $arrayCompared = array_diff($expected, $clients->getFillable());

        $this->assertEquals(0, count($arrayCompared));
        
    }
}

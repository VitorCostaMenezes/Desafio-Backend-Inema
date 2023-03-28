<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Relation;

class RelationsTest extends TestCase
{
    /** @test */
    public function check_if_relations_columns_is_correct()
    {
        $relation = new Relation;
        $expected = [ 
            'order_id ', 
            'product_id',
            'amount'
        ];

        $arrayCompared = array_diff($expected, $relation->getFillable());

        $this->assertEquals(0, count($arrayCompared));
        
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class reportTest extends TestCase
{
    /**
     * @test
     */
    public function api_customersにGETメソッドでアクセスできる()
    {
        // 実行部分を記述
        $response = $this->get('api/customers');
        // 先に検証部分を記述
        $response->assertStatus(200);
    }
}

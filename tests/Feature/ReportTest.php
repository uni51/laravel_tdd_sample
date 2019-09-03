<?php

namespace Tests\Feature;

use App\Customer;
use App\Report;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
{

    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'TestDataSeeder']);
    }

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

    /**
     * @test
     */
    public function api_customersにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_idにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_idにPUTメソッドでアクセスできる()
    {
        $response = $this->put('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_customers_idにDELETEメソッドでアクセスできる()
    {
        $response = $this->delete('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reportsにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reportsにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idにPUTメソッドでアクセスできる()
    {
        $response = $this->put('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_reports_report_idにDELETEメソッドでアクセスできる()
    {
        $response = $this->delete('api/reports/1');
        $response->assertStatus(200);
    }
}

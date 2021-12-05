<?php

declare(strict_types = 1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);

        $response = $this->get('/reg');
        $response->assertStatus(200);


    }
    public function test_db(){
      
            DB::connection()->getDatabaseName();

            $this->assertTrue(true);
        
 
    }
}

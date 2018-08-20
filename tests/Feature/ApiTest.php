<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    
    public function testApiRoot()
    {
        $this->get('/api')
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'version',
                    'status'
                ]
            ]);
    }

    public function testApiNews()
    {
        $this->get('/api/news')
            ->assertStatus(200);
    }

    public function testApiTops()
    {
        $this->get('/api/tops')
            ->assertStatus(200);
    }

    public function testApiBests()
    {
        $this->get('/api/bests')
            ->assertStatus(200);
    }

    public function testApiUserMudil()
    {
        $this->get('api/user/mudil')
            ->assertStatus(200);
    }

    public function testApiStoriesMudil()
    {
        $this->get('api/item/17804673')
            ->assertStatus(200);

        $this->get('api/item/17789026')
            ->assertStatus(200);
    }

    public function testApiUserJeffCyr()
    {
        $this->get('api/user/JeffCyr')
            ->assertStatus(200);
    }

    public function testApiStoriesJeffCyr()
    {
        $this->get('api/item/17785002')
            ->assertStatus(200);

        $this->get('api/item/14240385')
            ->assertStatus(200);
    }
}

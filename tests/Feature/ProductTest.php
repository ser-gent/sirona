<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{

    public function test_index_page() {
        $this->signIn();
        $response = $this->get('/product');
        $response->assertStatus(200);
    }

    public function test_show_page() {
        $this->signIn();
        Product::factory()->create();
        $response = $this->get('/product/1');
        $response->assertStatus(200);
    }

    public function test_edit_page() {
        $this->signIn();
        Product::factory()->create();
        $response = $this->get('/product/1/edit');
        $response->assertStatus(200);
    }

}

<?php

namespace Tests\Feature\Products;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed ProductsSeeder');
    }

    public function test_products_can_be_indexed()
    {
        $response = $this->get('/api/products');
        $response->assertStatus(200);
    }
    public function test_product_can_be_shown()
    {
        $product = Product::factory()->create();
        $response = $this->get('/api/products/' . $product->getKey());
        $response->assertStatus(200);
    }
    public function test_product_can_be_stored()
    {
        $attr = [
            'sku' => '2320928952',
            'name' => 'product',
            'price' => 16339.12,
        ];
        $response = $this->post('/api/products', $attr);
        $response->assertStatus(201);
        $this->assertDatabaseHas('products', $attr);
    }
    public function test_product_can_be_updated()
    {
        $product = Product::factory()->create();
        $attr = [
            'sku' => '2320928952',
            'name' => 'product',
            'price' => 16339.12,
        ];
        $response = $this->patch('/api/products/' . $product->getKey(), $attr);
        $response->assertStatus(202);
        $this->assertDatabaseHas('products', array_merge(
            ['id' => $product->getKey()],
            $attr
        ));
    }
    public function test_product_can_be_destroyed()
    {
        $product = Product::factory()->create();
        $response = $this->delete('/api/products/' . $product->getKey());
        $response->assertStatus(204);
        $this->assertDatabaseMissing('products', ['id' => $product->getKey()]);
    }
}

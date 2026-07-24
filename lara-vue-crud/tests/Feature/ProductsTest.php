<?php

use App\Models\User;

test('authenticated users can visit the products page', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('products.index'));

    $response->assertOk();
    $response->assertInertia(fn ($page) => $page->component('products/Index'));
});

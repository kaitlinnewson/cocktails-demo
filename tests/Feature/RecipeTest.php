<?php

namespace Tests\Feature;

use Tests\TestCase;

class RecipeTest extends TestCase
{
    /**
     * Test getting a recipe from the api.
     */
    public function test_getting_recipe(): void
    {
        $response = $this->get('/recipe/1');
        $response->assertStatus(200);
    }
}

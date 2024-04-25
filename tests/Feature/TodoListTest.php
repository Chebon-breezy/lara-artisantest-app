<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_store_todo_list(): void
    {
        //preparation /prepare

        //action /perform
        $response = $this->getJson(route('todoList.index'));

        //assertion /predict
        $this->assertEquals(1, count($response->json()));
    }
}

<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_fetch_all_todo_list(): void
    {
        //preparation /prepare
        TodoList::factory()->create();


        //action /perform
        $response = $this->getJson(route('todoList.index'));

        //assertion /predict
        $this->assertEquals(1, count($response->json()));
    }

    public function test_fetch_single_todo_list(): void
    {
        //preparation /prepare


        //action
        $response = $this->getJson(route('todoList.show', 1));

        //assertion /predict
        $response->assertStatus(200);

        //assertion

    }
}

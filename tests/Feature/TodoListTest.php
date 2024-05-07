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

    private $list;

    public function setUp(): void
    {
        parent::setUp();
        $this->list = TodoList::factory()->create(['name' => 'my list']);
    }

    public function test_fetch_all_todo_list(): void
    {
        //action /perform
        $response = $this->getJson(route('todoList.index'));

        //assertion /predict
        $this->assertEquals(1, count($response->json()));
    }

    public function test_fetch_single_todo_list(): void
    {
        $response = $this->getJson(route('todoList.show', $this->list->id))->assertOk()->json();
        $this->assertEquals($response['name'], $this->list->name);
    }
}

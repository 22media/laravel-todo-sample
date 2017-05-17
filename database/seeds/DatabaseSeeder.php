<?php

use Illuminate\Database\Seeder;
use App\Todo;
use App\TodoList;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $todoLists = factory(TodoList::class, 3)->create();

        $todoLists->each(function ($list) {
            factory(Todo::class, 6)->create(['todo_list_id'=>$list->id]);
        });
    }
}

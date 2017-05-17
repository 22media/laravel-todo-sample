<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];
    protected $casts = [
        'is_done' => 'boolean',
    ];

    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}

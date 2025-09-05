<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoItetms extends Model
{
    use HasFactory;
    protected $fillable = [
        'todo_list_id',
        'content',
        'is_completed',
    ];
    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}

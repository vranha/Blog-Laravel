<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function messages()
    {
        return $this->morphedByMany(Message::class, 'taggable');
    }
    public function users()
    {
        return $this->morphedByMany(User::class, 'taggable');
    }
}

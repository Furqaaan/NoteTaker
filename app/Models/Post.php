<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ["post"];

    public function setPostAttribute($value) {
        $this->attributes["post"] = ucfirst($value);
    }
}

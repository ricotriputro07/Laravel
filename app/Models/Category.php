<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    public function posts(): HasMany {
        return $this->HasMany( Post::class );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Work extends Model
{
    use HasFactory;

    public function user() : BelongsTo {
        return $this->belongsTo(User::class, "user_id");
    }

    public function categories() : BelongsTo {
        return $this->belongsTo(Category::class, "category_id");
    }
}

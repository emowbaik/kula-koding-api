<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    use HasFactory;

    protected $table = "komentars";
    protected $guarded = ["id"];

    function User() : BelongsTo {
        return $this->belongsTo(User::class, "user_id");
    }
}

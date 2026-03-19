<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_id',
        'name',
        'year_level',
        'description',
    ];

    public function career(): BelongsTo
    {
        return $this->belongsTo(Career::class);
    }
}

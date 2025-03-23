<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Model extends EloquentModel
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['maker_id', 'name'];

    public function cars(): HasMany
    {
        // Model has multiple cars
        return $this->hasMany(Car::class);
    }

    public function maker(): BelongsTo
    {
        // Model belongs to a maker
        return $this->belongsTo(Maker::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function cities(): HasMany
    {
        // State has multiple cities
        return $this->hasMany(City::class);
    }

    public function cars(): HasMany
    {
        // State has multiple cars
        return $this->hasMany(Car::class);
    }
}

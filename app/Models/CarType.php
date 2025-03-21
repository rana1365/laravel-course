<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function cars(): HasMany
    {
        // Car Type has many cars
        return $this->hasMany(Car::class);
    }


}
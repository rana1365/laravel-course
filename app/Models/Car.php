<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = 
    [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at',
    ];

    public function features(): HasOne
    {
        // Car has one CarFeatures
        return $this->hasOne(CarFeatures::class);
    }

    public function primaryImage(): HasOne
    {
        // Car has one primary image
        return $this->hasOne(CarImage::class)
        ->oldestOfMany('position');
    }

    public function images(): HasMany
    {
        // Car has many images
        return $this->hasMany(CarImage::class);
    }

    public function carType(): BelongsTo
    {
        // CarType has multiple cars
        return $this->belongsTo(CarType::class);
    }

    public function fuelType(): BelongsTo
    {
        // FuelType has multiple cars
        return $this->belongsTo(FuelType::class);
    }

    public function maker(): BelongsTo
    {
        // Maker has multiple cars
        return $this->belongsTo(Maker::class);
    }

    public function model(): BelongsTo
    {
        // Model has multiple cars
        return $this->belongsTo(\App\Models\Model::class);
    }

    public function owner(): BelongsTo
    {
        // Owner(user) has multiple cars
        return $this->belongsTo(User::class, 'user_id');
    }

    public function city(): BelongsTo
    {
        // City has multiple cars
        return $this->belongsTo(City::class);
    }

    public function favoredUsers(): BelongsToMany
    {
        // A Car is favored by multiple users
        return $this->belongsToMany(User::class, 'favorite_cars');
    }
}

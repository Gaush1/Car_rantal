<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetail extends Model
{
    use HasFactory;

    protected $table = 'cardetails';

    protected $fillable = [
       'car_id', 
       'description',
       'image',
       'name',
       'price',
       'body',
       'seat',
       'door',
       'luggage',
       'fueltype',
       'engine',
       'year',
       'mileage',
       'transmission',
       'drive',
       'fueleconomy',
       'exteriorcolor',
       'interiorcolor',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}

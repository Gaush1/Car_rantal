<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'name',
        'image',
        'storage',
        'capacity',
        'doors',
        'type',
        'bodytype',
        'price',
    ];

    
public function carDetail()
{
    return $this->hasOne(CarDetail::class);
}

public function bookings()
{
    return $this->hasMany(Booking::class);
}
public function companybooking()
{
    return $this->hasMany(Companybooking::class);
}

}

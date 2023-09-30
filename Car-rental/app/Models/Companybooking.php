<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companybooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'companye_id',
        'car_id',
        'car_name',
        'total_price',
        'pickuplocation',
        'dropofflocation',
        'pickup_date',
        'return_date',
        'status',
    ];

    public function companye()
    {
        return $this->belongsTo(Companye::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

}

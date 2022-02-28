<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'name', 'email', 'payment_method', 'package_name', 'order_date', 'number', 'total', 'adult_count', 'child_count', 'pickup_location'];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

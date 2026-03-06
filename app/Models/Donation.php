<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
    'name',
    'district',
    'block',
    'mobile',
    'amount',
    'screenshot'
];
}

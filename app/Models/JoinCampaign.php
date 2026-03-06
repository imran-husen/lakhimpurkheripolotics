<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinCampaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mobile',
        'district',
        'block',
        'village',
        'reason'
    ];
}  //


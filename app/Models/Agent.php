<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "mobilephone",
        "website",
        "facebook",
        "twitter",
        "instagram",
        "photo",
        "address",
        "bio",
    ];
}

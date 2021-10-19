<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'sector_activities',
        'nb_machine',
        'card_number',
        'date_expiration',
        'cvv',
    ];

    protected $hidden = [
        'user_id'
    ];
}

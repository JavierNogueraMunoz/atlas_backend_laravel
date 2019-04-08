<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = [
        'dni',
        'email',
        'name',
        'newsletter',
        'captation',
        'address',
        'postal_code',
        'city',
        'region',
        'country',
        'observation',
    ];
}

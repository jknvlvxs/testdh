<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'cpf', 'date_of_birth', 'address', 'email'
    ];
}

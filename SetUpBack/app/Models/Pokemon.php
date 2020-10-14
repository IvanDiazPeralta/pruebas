<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    //assigning db table model is associated with
    protected $table = 'pokemons';

    //fillable fields
    protected $fillable = ['name'];
}


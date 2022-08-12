<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
    use HasFactory;
    public $table = "persons";
    public $timestamps = false;
    public $fillable = [
        "email",
        "nome",
        "cep",
        "password"
    ];
}

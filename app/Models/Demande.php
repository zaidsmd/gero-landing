<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $table = 'demandes'; // Custom table name

    protected $fillable = [
        'entreprise',
        'telephone',
        'email',
    ];
}

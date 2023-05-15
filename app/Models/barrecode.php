<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barrecode extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'description',
        'reference',
        'quantite',
    ];
}

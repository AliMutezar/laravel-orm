<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    use HasFactory;

    protected $fillable = [
        'clubs_id',
        'name',
        'old',
        'nationality',
        'created_at',
        'updated_at',
    ];

    public function clubs()
    {
        return $this->belongsTo('App\Models\Clubs', 'clubs_id', 'id');
    }
}

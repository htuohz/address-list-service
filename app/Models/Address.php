<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'line1',
        'line2',
        'line3',
        'line4',
        'city',
        'postal_code',
        'country_code',
        'state_code',
        'state_name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_plan')->withPivot('expires_at')->withTimestamps();
    }
}

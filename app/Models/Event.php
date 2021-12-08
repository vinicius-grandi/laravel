<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}

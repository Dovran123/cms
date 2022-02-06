<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class image extends Model
{
    use HasFactory;
    protected $table = 'galery';
    protected $fillable = [
        'name',
        'image',
        'like'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'text',
        'uzivatel_fk',
        'image_fk'
    ];
    use HasFactory;
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class,'id','uzivatel_fk');
    }
    public function listimage(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(image::class,'id','image_fk');
    }
}

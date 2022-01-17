<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{

    use HasFactory;
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class,'id','uzivatel_fk');
    }
    protected $table = 'workers';
    protected $fillable = [
        'phone',
        'adresa',
        'postcode',
        'uzivatel_fk',
        'state',
        'education',
        'coutry',
        'region'

    ];

}

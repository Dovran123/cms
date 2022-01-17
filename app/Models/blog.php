<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class blog extends Model
{

    protected $table = 'blogs';
    protected $fillable = [
        'image',
        'text',
        'tag',
        'nadpis',
        'category',
        'uzivatel_fk'
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->HasOne(User::class,'id','uzivatel_fk');
    }
    use HasFactory;
}

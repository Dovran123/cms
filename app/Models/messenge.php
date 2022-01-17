<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class messenge extends Model
{
    use HasFactory;
    protected $table = 'letter';
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'uzivatel_fk',
        'text',
    ];
    public static function insertData($data)
    {

        DB::table('letter')->insertGetId($data);
        return 1;
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class,'id','uzivatel_fk');
    }
}

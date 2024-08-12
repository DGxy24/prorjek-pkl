<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;
    //tes

    protected $fillable = [
        'user_id',
        'bagian_id',
        'permasalahan_id',
        'penjelasan',
        'tindakan',

    ];
    public function permasalahan()
    {
        return $this->belongsTo(permasalahan::class);
    }

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    
    }
}

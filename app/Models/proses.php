<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proses extends Model
{
    use HasFactory;
    protected $fillable = [
        'tiket_id',
        'user_id',
        'tindakan',
        'bukti'

    ];
    public function tiket()
{
    return $this->belongsTo(tiket::class);

}
public function user()
{
    return $this->belongsTo(User::class);
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permasalahan extends Model
{
    use HasFactory;
    public function tiket()
    {
        return $this->hasMany(tiket::class);
    
    }
}

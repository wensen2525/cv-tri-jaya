<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $table = 'jenises';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function kacas()
    {
        return $this->hasMany(Jenis::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaca extends Model
{
    use HasFactory;

    protected $table = 'kacas';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    // relationships
    // example
    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function ketebalan()
    {
        return $this->belongsTo(Ketebalan::class);
    }
}

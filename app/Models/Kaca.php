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
    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }
}

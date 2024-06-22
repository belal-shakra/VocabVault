<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;


    protected $fillable = ['letter'];



    public function words(){
        return $this->hasMany(Word::class);
    }
}

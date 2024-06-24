<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;



    protected $fillable = ['word', 'meaning', 'like', 'details', 'letter_id'];



    public function letter(){
        return $this->belongsTo(Letter::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;



    protected $fillable = ['word', 'meaning', 'like', 'details', 'save', 'letter_id', 'user_id'];



    public function letter(){
        return $this->belongsTo(Letter::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}

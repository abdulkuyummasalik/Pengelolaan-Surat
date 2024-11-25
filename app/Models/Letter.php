<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    protected $fillable = ['letter_type_id', 'perihal', 'recipients', 'content', 'attachment', 'user_id'];

    public function letterType()
    {
        return $this->belongsTo(LetterType::class,'letter_type_id');
    }

    public function notulisUser(){
        return $this->belongsTo(User::class,'notulis');
    }

    public function result(){
        return $this->hasMany(Result::class,'letter_id');
    }
}

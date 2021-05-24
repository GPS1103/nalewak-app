<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillionerQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'anwser1',
        'anwser2',
        'anwser3',
        'anwser4',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'ISBN', 'argument', 'coverImage', 'edition_id'
    ];

    public function edition(){
        return $this->belongsTo();
    }
}
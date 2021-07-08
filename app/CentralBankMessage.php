<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentralBankMessage extends Model
{
    protected $fillable = [
        'title', 'description', 'image_path', 'status'
    ];
}

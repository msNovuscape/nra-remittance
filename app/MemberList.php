<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberList extends Model
{
    protected $fillable = [
        'phone', 'first_name', 'last_name','address','image_path','city','country','email'
    ];
}

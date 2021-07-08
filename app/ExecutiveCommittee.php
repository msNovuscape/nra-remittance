<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExecutiveCommittee extends Model
{
    protected $fillable = [
        'designation', 'first_name', 'last_name','address','image_path','city','country','email','phone'
    ];
}

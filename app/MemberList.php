<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberList extends Model
{
    protected $fillable = [
        'phone', 'name', 'organization','designation','image_path','website_link','address',
    ];
}

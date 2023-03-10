<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'token';
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = 'Tag';

    protected $fillable = [
        'Tag_name',
    ];
}

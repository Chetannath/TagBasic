<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'Question';

    protected $fillable = [
        'Tag_id', 'Question',
    ];
}

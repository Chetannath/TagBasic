<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $table = 'Answer';

    protected $fillable = [
        'Question_id', 'Answer',
    ];
}

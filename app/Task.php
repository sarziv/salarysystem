<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /*Protected*/
    protected $fillable = [
        'user_id', 'memo_text'
    ];


}
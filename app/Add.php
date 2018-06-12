<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{

    /*Protected*/
    protected $fillable = [
        'id', 'user_id', 'pallet', 'eilutes'
    ];


}

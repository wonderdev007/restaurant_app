<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
    protected $fillable = [
        'fname', 'lname', 'email', 'phone_number',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $guarded = []; //assigning data for all column

    public function fromContact()
    {
        return $this->hasOne(User::class, 'id', 'from');
    }
}

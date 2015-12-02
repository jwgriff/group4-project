<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = 'administrator';

    protected $fillable = ['user_id', 'fname', 'lname','home_street', 'home_city',
        'home_state', 'home_zip', 'home_phone', 'security_level'];

    public function userProfile(){
        return $this->belongsTo('App\Models\User');
    }
}

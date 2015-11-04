<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $table = 'investors';

    protected $fillable = ['user_id', 'profile_name', 'street',
        'city', 'state', 'zip', 'phone', 'invst_objective', 'invst_amount_total'];

    public function userProfile(){
       return $this->belongsTo('App\Models\User');
    }

    public function investments(){
      return  $this->belongsToMany('App\Models\Campaign')
                    ->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';

    protected $fillable = ['founder_id', 'investor_id', 'campaign_name',
        'description', 'start_date', 'end_date', 'target_goal',
        'target_current', 'acct_number'];

    protected $cast = ['is_active' => 'boolean'];

    public function isActive(){
        return $this->getAttribute('is_active');
    }



    public function founder(){
        $this->belongsTo('App\Models\Founder');
    }

    public function investors(){
        $this->belongsToMany('App\Models\Investor')
                ->withTimestamps();
    }



}

<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    // region Protected Variables
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password',
                            'is_admin', 'is_founder', 'is_investor'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    protected $cast = [
        'is_admin' => 'boolean',
        'is_founder' => 'boolean',
        'is_investor' => 'boolean',
    ];

    protected $redirectTo;

    /**
     * @param array $attributes
     */

    // region Public Methods
    public function __construct($attributes = array())  {
        parent::__construct($attributes); // Eloquent
        // Your construct code.
        if($this->isAdmin()){
            $this->redirectTo = '/admin';
        }elseif($this->isFounder()){
            $this-> redirectTo = '/founder';
        }elseif($this->isInvestor()){
            $this->redirectTo = '/investor';
        }
    }

    public function isAdmin(){
       return $this->getAttribute('is_admin');
    }

    public function isFounder(){
        return $this->getAttribute('is_founder');
    }

    public function isInvestor(){
        return  $this->getAttribute('is_investor');
    }
}

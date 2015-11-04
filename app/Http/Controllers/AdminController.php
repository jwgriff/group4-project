<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Founder;
use App\Models\Investor;
use App\Models\Campaign;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        //dd($users);
        return view('admin.home', compact('users'));
    }




    public function edit($userType, $id){
        //$investor = User::findOrNew($id)->details()->getEager()->all()[0];
        //dd($userType, $id);
        function getUserType ($userType)
        {   define('founder', 'investor');
            $temp = ['founder' => 'Founder', 'investor' => 'Investor', 'admin' => 'Admin'];
            return $temp[$userType];
        }

        return view('admin.edit', [ $userType => User::findOrNew($id)->details()->getEager()->all()[0],
            'userType' => getUserType ($userType) ]);
    }


    public function delete($userType, $id){
        //$investor = User::findOrNew($id)->details()->getEager()->all()[0];
        //dd($userType, $id);
        function getUserType ($userType)
        {   define('founder', 'investor');
            $temp = ['founder' => 'Founder', 'investor' => 'Investor', 'admin' => 'Admin'];
            return $temp[$userType];
        }

        //return view('admin.edit', [ $userType => User::findOrNew($id)->details()->getEager()->all()[0],
        //    'userType' => getUserType ($userType) ]);
    }




}

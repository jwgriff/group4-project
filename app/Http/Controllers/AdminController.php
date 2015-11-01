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


    public function editFounder($id){
        $founder = Founder::findOrNew($id);
        return view('admin.edit', ['founder'=> Founder::findOrNew($id),
                                    'userType'=> 'Founder']);
    }

    public function editInvestor($id){
        //$investor = Investor::findOrNew($id);
        return view('admin.edit', ['investor'=> Investor::findOrNew($id),
                                    'userType'=> 'Investor']);
    }
    /*
        public function editAdmin($id){
            $returnModel = Founder::findOrNew($id);
            return view('admin.edit', compact('$returnModel'));
        }
    */
}

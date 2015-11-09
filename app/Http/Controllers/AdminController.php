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
        return view('admin.home', compact('users'));
    }


    public function edit($userType, $id){
        $temp = null;
        if($userType == 'founder'){
            $temp = Founder::findOrFail($id);

        }elseif($userType == 'investor'){
            $temp = Investor::findOrFail($id);

        }elseif($userType == 'campaign'){
            $temp = Campaign::findOrFail($id);
        }
        return view('admin.edit', [ $userType => $temp,
            'userType' => $this-> getUserType($userType) ]);
    }


    public function delete($userType, $id, Request $req ){
        $temp = null;
        $profile = null;
        if($userType == 'founder'){
            //$profile=  Founder::findOrFail($id)->toArray();
            //dd($profile);
            Founder::findOrFail($id)->delete();
        }elseif($userType = 'investor'){
            //$profile=  Investor::findOrFail($id)->toArray();
            //dd($profile);
            Investor::findOrFail($id)->delete();
        }
        flash()->success('Object Deleted');

        $users = User::all();
        return view('admin.home', compact('users'));
    }

    public function update($userType, $id, Request $req){
        $temp = null;
        if($userType == 'founder'){
            Founder::findOrNew($id)->update($req->all());
            $temp = Founder::findOrNew($id);

        }elseif($userType == 'investor'){
            Investor::findOrNew($id)->update($req->all());
            $temp = Investor::findOrNew($id);

        }elseif($userType == 'campaign'){
            Campaign::findOrNew($id)->update($req->all());
            $temp = Campaign::findOrNew($id);
        }
        flash()->success($userType.' Updated');

        return view('admin.edit', [ $userType => $temp,
                                        'userType' => $this->getUserType($userType) ]);
    }

    public function details($userType, $id){
        $user = User::findOrFail($id);
        $temp = $user->details()->all()[0];
        $cmpginvt = null;
        if($userType == 'founder') {
            $cmpginvt = Founder::findOrFail($temp->id)->campaigns();
            return view('admin.detailsFndr', [  'user' => $user,
                                                $userType => $temp,
                                                'cmpginvt' => $cmpginvt,
                                                'userType' =>
                                                    $this->getUserType($userType)]);

        }elseif($userType == 'investor') {
            $cmpginvt = Investor::findOrFail($temp->id)->investments();
            return view('admin.detailsInvst', [ 'user' => $user,
                                                $userType => $temp,
                                                'cmpginvt' => $cmpginvt,
                                                'userType' =>
                                                    $this->getUserType($userType)]);

        }

    }



    private function getUserType ($userType)
    {   define('founder', 'investor', 'campaign');
        $temp = ['founder' => 'Founder', 'investor' => 'Investor','campaign' => 'Campaign'];
        return $temp[$userType];
    }




}

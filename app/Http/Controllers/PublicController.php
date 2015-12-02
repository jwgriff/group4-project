<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Campaign;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function main(){
        return view('public.mainContent');
    }

    public function investor(){
        //dd('TestOut dd');
        return view('public.mainInvestor');
    }

    public function founder(){
        return view('public.mainFounder');
    }


    public function carousel(){
        $campaigns = Campaign::all();
        return response()->json($campaigns);
    }


}

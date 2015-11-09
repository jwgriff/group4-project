<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/1/2015
 * Time: 9:33 AM
 */
?>
@extends('layouts.admin')
@section('content')

    <div class="container">
        <h1>Edit {!! $userType !!}</h1>
        @if($userType == 'Founder')
                <!-------------------------------- FOUNDER MODEL FORM ---------------------->

            {!! Form::model($founder, ['action'=> ['AdminController@update',
                                                  '$userType'=> 'founder',
                                                    $founder->id]]) !!}
                 @include('founders.form')
                {!! Form::submit('Update Founder', array('class' => 'btn btn-default navbar-left')) !!}
            {!! Form::close() !!}
            <a class="btn btn-default navbar-right" id="edit" href ="{{action('AdminController@details')}}">List Campaigns</a>
        @elseif($userType == 'Investor')
                <!---------------------------------- INVESTOR MODEL FORM --------------------->
            {!! Form::model($investor, array('action'=> ['AdminController@update',
                                                'userType'=> 'investor',
                                                   $investor->id] ))  !!}
                 @include('investors.form')
                {!! Form::submit('Update Investor', array('class' => 'btn btn-default navbar-left')) !!}
            {!! Form::close() !!}
            <a class="btn btn-default navbar-right" id="edit" href ="{{action('AdminController@details')}}">List Investments</a>
        @elseif($userType == 'Campaign')
                <!---------------------------------- CAMPAIGN MODEL FORM ---------------------->
            {!! Form::model($campaign, array('action'=> ['AdminController@update',
                                                'userType'=> 'campaign',
                                                   $campaign->id] ))  !!}
            @include('campaigns.form')
            {!! Form::submit('Update Campaign', array('class' => 'btn btn-default navbar-left')) !!}
            {!! Form::close() !!}
        <a class="btn btn-default navbar-right" id="edit" href ="{{action('AdminController@details')}}">List Founder</a>
        <a class="btn btn-default navbar-right" id="edit" href ="{{action('AdminController@details')}}">List Investors</a>
        @endif
    </div>
    <script>
        msgFadeOut();
    </script>

@stop

{{--

{!! $userType !!}

@if($userType = 'Founder')
        <!--FOUNDER MODEL FORM-->
        {!! Form::model($founder ) !!}
             @include('founders.form')
        {!! Form::close() !!}
    @elseif($userType = 'Investor')
        <!--INVESTOR MODEL FORM-->
        {!! Form::model($investor ) !!}
        @include('investors.form')
        {!! Form::close() !!}
    @endif

 <!--INVESTOR MODEL FORM-->
        {!! Form::model($investor ) !!}
        @include('investors.form')
        {!! Form::close() !!}

--}}
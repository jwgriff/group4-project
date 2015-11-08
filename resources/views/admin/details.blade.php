<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/4/2015
 * Time: 12:37 AM
 */
?>

@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>View {!! $userType !!}</h1>
        @if($userType == 'Founder')
            <!--FOUNDER MODEL FORM-->
            {!! Form::model($founder) !!}
            @include('founders.form')
            {!! Form::close() !!}
        <a class="btn btn-default navbar-left" id="edit" href ="{{action('AdminController@update')}}">Update Founder</a>
        <a class="btn btn-default navbar-right" id="edit" href ="{{action('AdminController@details')}}">List Campaigns</a>
        @elseif($userType == 'Investor')
            <!--INVESTOR MODEL FORM-->
            {!! Form::model($investor )!!}
            @include('investors.form')
            {!! Form::close() !!}
        <a class="btn btn-default navbar-left" id="edit" href ="{{action('AdminController@update')}}">Update Investor</a>
        <a class="btn btn-default navbar-right" id="edit" href ="{{action('AdminController@details')}}">List Investments</a>

        @endif
    </div>
    <script>
        msgFadeOut();
    </script>

@stop
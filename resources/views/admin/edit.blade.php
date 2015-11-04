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
                <!--FOUNDER MODEL FORM-->
            {!! Form::model($founder ) !!}
                 @include('founders.form')
            {!! Form::close() !!}
            <a class="btn btn-default" id="edit" href ="{{action('AdminController@index')}}">Update Founder</a>
        @elseif($userType == 'Investor')
                <!--INVESTOR MODEL FORM-->
            {!! Form::model($investor ) !!}
                 @include('investors.form')
            {!! Form::close() !!}

            <a class="btn btn-default" id="edit" href ="{{action('AdminController@index')}}">Update Investor</a>
        @endif
        <a class="btn btn-default" id="edit" href ="{{action('AdminController@index')}}">Return Admin Home</a>
    </div>

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
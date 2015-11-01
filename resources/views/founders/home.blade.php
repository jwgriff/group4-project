<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/1/2015
 * Time: 11:04 AM
 */
?>
@extends('layouts.founder')
@section('content')
    <h1>Hello From Founders Home Content</h1>

     <!--FOUNDER MODEL FORM-->
    {!! Form::model($founder ) !!}
        @include('founders.form')
    {!! Form::close() !!}
@stop
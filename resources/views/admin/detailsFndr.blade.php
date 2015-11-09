<?php
/**
 * Created by PhpStorm.
 * User: weford
 * Date: 11/4/2015
 * Time: 12:37 AM
 */
    //var_dump($userType);
   // var_dump($temp);
    //var_dump('userType');
?>

@extends('layouts.admin')
@section('content')
    {{-- @include('view.name', array('key' => 'value')); --}}
{{-- @if('userType' == 'Founder')--}}
         @include('user.detail')
         @include('founders.detail')
         @include('campaigns.list')
{{--  @elseif('userType' == 'Investor')
          @include('user.detail',[  'user' => $user])
          @include('investors.detail', [$userType => $temp])
          @include('campaigns.listinvst', ['cmpginvt' => $cmpginvt])
   @endif --}}
      <script>
         msgFadeOut();
     </script>
 @stop
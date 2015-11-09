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
{{-- @if('userType' == 'Founder')
         @include('user.detail',[  'user' => $user])
         @include('founders.detail', [$userType => $temp])
         @include('campaigns.list',['cmpginvt' => $cmpginvt])
      @elseif('userType' == 'Investor') --}}
          @include('user.detail')
          @include('investors.detail')
          @include('campaigns.listinvst')
  {{--  @endif --}}
      <script>
         msgFadeOut();
     </script>
 @stop